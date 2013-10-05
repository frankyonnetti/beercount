#
# Compass Configuration Properties
# http://compass-style.org/help/tutorials/configuration-reference/
#

# Can be :stand_alone or :rails. Defaults to :stand_alone.
project_type = :stand_alone

# The environment mode. Defaults to :production, can also be :development
environment = :production

# In development, we can turn on the FireSass-compatible debug_info.
firesass = false

# Not needed in :stand_alone mode where it can be inferred by context. Sets the path to the root of the project.
# project_path

# The path to the project when running within the web server. Defaults to "/".
http_path = "/"

# The directory where the css stylesheets are kept. It is relative to the project_path. Defaults to "stylesheets".
css_dir = "css"

# The full path to where css stylesheets are kept. Defaults to <project_path>/<css_dir>.
# css_path

# The full http path to stylesheets on the web server. Defaults to http_path + "/" + css_dir.
# http_stylesheets_path

# The directory where the sass stylesheets are kept. It is relative to the project_path. Defaults to "sass".
sass_dir = "sass_assets"

# The full path to where sass stylesheets are kept. Defaults to <project_path>/<sass_dir>.
# sass_path

# The directory where the images are kept. It is relative to the project_path. Defaults to "images".
images_dir = "img"

# The full path to where images are kept. Defaults to <project_path>/<images_dir>.
# images_path

# The full http path to images on the web server. Defaults to http_path + "/" + images_dir.
# http_images_path

# The directory where generated images are kept. It is relative to the project_path. Defaults to the value of images_dir.
# generated_images_dir

# The full path to where generated images are kept. Defaults to the value of <project_path>/<generated_images_dir>.
# generated_images_path

# The full http path to generated images on the web server. Defaults to http_path + "/" + generated_images_dir.
# http_generated_images_path

# The directory where the javascripts are kept. It is relative to the project_path. Defaults to "javascripts".
javascripts_dir = "js"

# The full path to where javascripts are kept. Defaults to <project_path>/<javascripts_dir>.
# javascripts_path

# The full http path to javascripts on the web server. Defaults to http_path + "/" + javascripts_dir.
# http_javascripts_path

# The output style for the compiled css. One of: :nested, :expanded, :compact, or :compressed.
output_style = :compact

# Indicates whether the compass helper functions should generate relative urls from the generated css to assets, or absolute urls using the http path for that asset type.
relative_assets = true

# Other paths on your system from which to import sass files. See the add_import_path function for a simpler approach.
# additional_import_paths

# Set this to true to silence deprecation warnings.
disable_warnings = false

# These options are passed directly to the Sass compiler.
# For more details on the format of sass options, please read the sass options documentation.
# http://sass-lang.com/docs/yardoc/file.SASS_REFERENCE.html#options
# sass_options

#Indicates whether line comments should be added to compiled css that says where the selectors were defined. Defaults to false in production mode, true in development mode.
line_comments = false

# Can be :scss or :sass. Defaults to :scss.
preferred_syntax = :scss

# The directory where the font files are kept. Standalone projects will default to <css_dir>/fonts. Rails projects will default to "public/fonts".
# fonts_dir = "type"

# The full path to where font files are kept. Defaults to <project_path>/<fonts_dir>.
# fonts_path

# The full http path to font files on the web server.
# http_fonts_path

# The relative http path to font files on the web server.
# http_fonts_dir

# Defaults to :chunky_png
# sprite_engine

# Defaults to {:compression => Zlib::BEST_COMPRESSION}. See the chunky_png wiki for more information
# https://github.com/wvanbergen/chunky_png/wiki/Constraints
# chunky_png_options

# Defaults to [images_path]
# sprite_load_path
