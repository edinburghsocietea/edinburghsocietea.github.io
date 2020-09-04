# SocieTea Website

This repository contains:

1. Config.toml, the project configuration file.
2. The main project structure (all directories except public/ and event_signups/)
3. public/, this is where GitHub pages runs from
4. event_signups/, previously used sign up pages - these use Google docs but you will need to reconfigure them.

## Making Changes
The project is built with [Hugo](https://gohugo.io/getting-started/quick-start/), which generates a static site. Most changes are made in the config.toml file, it should be straight forward to see what needs to be changed there (e.g. Committea Members).

If you want to make changes to the layout/theme, checkout themes/. If you want to add contents ("editorial"), add it to content/. Further info on how to do this can be found in the Hugo documentation.

Once you made your changes, run:
```sh
hugo server -D
```
in the project directory to spin up a local test server. If everything looks okay, build the static site:
```sh
hugo -D
```
Commit and push the changes up to the main branch. Then update the gh-pages branch using:
```sh
git subtree push --prefix public origin gh-pages
```
This will automatically update the live version (few minutes caching delay probably!).

## Domain
Domain is currently registered to [@AlexPietz](https://github.com/AlexPietz/). It's too much of a hassle to change owner every year and they don't mind paying for it. If theres problems or changes needed, ping them.
