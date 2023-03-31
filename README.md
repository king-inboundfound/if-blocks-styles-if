# if-blocks-styles-if
## block styles for https://inboundfound.com/

### Table of Contents 
    - Global CSS
        - Colors
        - Font Family

### Naming Conventions for .scss files
    Should correspond to the type of block:
        - WP Core Blocks

### Folders & scss files
    1. Blocks
        - IF Accordion Advanced
        - IF Video Card
        - IF On-page Subnav Menu


## How scss files work in the plugin

### Requirements (VSCODE editor only. Not sure about other IDEs)
    - Install Live Sass Compiler extension

### Steps
    - Create your main scss file (i.e. main.scss) put then save.
    - VSCODE will map and create a css file for you (which you will use for wp_enqueue) and it updates live.
    - To include other scss files to your main file use @import (i.e. @import 'path/to/folder/block_acf-accordion',)