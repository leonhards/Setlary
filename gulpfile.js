const { src, dest, watch, parallel } = require( 'gulp' );
const autoprefixer = require('autoprefixer');
const concat = require('gulp-concat');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');

// const creation can also be chained by separating them with commas but is discouraged by Google Styleguide
const root = './';
const scss = root + 'src/sass/';
const js = root + 'src/js/';
const jsDist = root + 'dist/js';
const styleWatchFiles = scss + '**/*.scss';

// Below we create an array of our javascript files and their locations
const jsSrc = [
    './node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    js + 'bootstrap-hover.js',
    js + 'misc.js'
];

// make sure to run the command 'gulp copyfonts' in the command line
function copyfonts() {
    return src(
        './node_modules/@fortawesome/fontawesome-free/webfonts/**/*.{ttf,woff2}'
    ).pipe(dest(root + 'webfonts/'));
}

function css() {
    return src(scss + 'style.scss', {sourcemaps: true})
        .pipe(
            sass({outputStyle: 'expanded'}).on('error', sass.logError)
        )
        .pipe(postcss([autoprefixer()]))
        .pipe(dest(root + 'dist/css'))
        .pipe(
            sass({outputStyle: 'compressed'}).on('error', sass.logError)
        )
        .pipe(postcss([autoprefixer()]))
        .pipe(dest(root, {sourcemaps: '.'}));
}

function javascript() {
    return src(jsSrc, {sourcemaps: true})
        .pipe(concat('setlary.js'))
        .pipe(desc(jsDist))
        .pipe(uglify())
        .pipe(rename({extname: '.min.js'}))
        .pipe(dest(jsDist, {sourcemaps: '.'}));
}

function watchAll() {
    watch(styleWatchFiles, css);
    watch(jsSrc, javascript);
}

exports.copyfonts = copyfonts;
exports.build = parallel(css, javascript);
exports.default = watchAll;