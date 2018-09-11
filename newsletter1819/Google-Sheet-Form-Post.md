## Overview

This collection of files serves as a simple static demonstration of how to post to a google spreadsheet from an external html `<form>` following the [example by Martin Hawksey](http://mashe.hawksey.info/2014/07/google-sheets-as-a-database-insert-with-apps-script-using-postget-methods-with-ajax-example/) 

## Run example

You should be able to just open `index.html` in your browser and test locally. 

However if there are some permissions errors you can make a quick html server with `python`. Open terminal and cd to the directory where the gist files are located and enter `python -m SimpleHTTPServer`. By default this creates a local server at `localhost:8000`

If you're using python 3 the command [differs slightly](http://stackoverflow.com/questions/530787/simple-http-web-server).

## Google Spreadsheet

The spreadsheet is located [here](https://docs.google.com/spreadsheets/d/1p6X_HejWbIBx3eDDSacNvkVI3vFkFMSq4XW4rUDTyAw/edit?usp=sharing)

## TODO

- [ ] Resolve 405 Error on Safari
- [x] Workaround for 405 error with Safari browser check
- [x] Add user feedback while ajax is submitting the request
- [x] Validation using [Bootstrap Validator](https://github.com/nghuuphuoc/bootstrapvalidator)
