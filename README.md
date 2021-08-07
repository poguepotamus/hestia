# Hestia

Personal website, if it's terrible looking I'm sorry.

## Development

Pull requests will not be accepted, these notes are here to refresh my memory of how to continue developing the website.

1. Clone the repo
    * `git clone git@github.com:poguepotamus/hestia.git hestia`
2. Install composer packages
    * Using composer>2.1.3: `composer install`
3. Install node modules
    * Using npm>6.14.10: `npm install`
    * You can expect warnings about optional packages.

### Serving

Pretty simple with php artisan, but the webpack needs to finish building before you can serve. This typically doesn't matter after the first time, but will reload every time you save a watched file.

* `npm run watch`
* `php artisan serve`

#### Serving to another computer

If you're working over the network, you may want to serve this to another computer. Use the following flags with their appropriate values.

* `--host <current_IP>`
* `--port 80` Typical http port
* Example: `php artisan serve --host 192.168.0.67 --port 80`

#### Installing font-awesome

Sometimes you just forget how to do things, so I'm putting this here as I'm just that kind of person.

1. Install fontawesome-free from npm
    * Using npm>6.14.10: `npm install --save @fortawesome/fontawesome-free`
2. Import it in your `app.css` file
    * `echo "@import '~@fortawesome/fontawesome-free/css/all.css';" >> resources\css\app.css`
