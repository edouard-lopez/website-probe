#!/usr/bin/env bash

projectDir="$HOME/projects/website-probe/app"

function generateThumb() {
    fn="${i##*/}" # filename.ext
    f="${fn%%.*}" # filename only
    ext="${fn//$f./}" # extract extension
    t="${f//-/ }" # dashify
    th="${i//.$ext/-thumb.$ext}"

    convert -define jpeg:size=200x200 "$i" -thumbnail '256x256>' "$th"
    echo "$th"
}


cd "$projectDir"
{
    printf '{\n'
    printf '\t"screenshots": [\n'
    for i in images/assets/screenshots/*; do

        [[ $i == *thumb.png ]] && continue
        th="$(generateThumb "$i")"
        printf "\t{\n"
            # printf '\t\t"url": "%s",\n' "$i"
            printf '\t\t"url\": {\n'
                printf '\t\t\t"img-full\": "%s",\n' "$i"
                printf '\t\t\t"img-thumb": "%s"\n' "$th"
            printf '\t\t},\n'

            printf '\t\t"title\": {\n'
                printf '\t\t\t"en\": "English Title",\n'
                printf '\t\t\t"fr": "Titre français"\n'
            printf '\t\t},\n'
	        printf '\t\t"long-desc": {\n'
                printf '\t\t\t"en\": "English description",\n'
                printf '\t\t\t"fr": "Description français"\n'
            printf '\t\t}\n'
        printf '\t},\n'
    done
    printf "\t]\n"
    printf "}"
} > ~/projects/website-probe/app/data/screenshots.json
