# Setting Up Automatic Browser Refresh with Vite in Laravel

## Prerequisites

Ensure you are using <b> Laravel 9.x</b> or later, as Vite is included by default starting from Laravel 9.

## Step 1: Add Vite Directives to Blade Views

Add the Vite directives to the head tag of your Blade views (or layout view). This ensures that Vite is properly integrated and can handle hot module replacement (HMR).

For example, in your `resources/views/layouts/app.blade.php` file or `resources/views/welcome.blade.php`, add the following:

```php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Name</title>
    @vite('resources/js/app.js')
</head>
<body>
    <!-- Your content here -->
</body>
</html>
```

## Step 2: Update vite.config.js

Ensure your `vite.config.js` file is configured to watch the necessary files for changes and refresh the browser accordingly. Here is an example configuration:

```js
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: ["resources/routes/**", "routes/**", "resources/views/**"],
        }),
    ],
});
```

## Step 3: Run Vite

Start the Vite development server by running the following command:

```sh
npm run dev
```

If you are using <b>Laravel 11</b> with `composer`, you can also use the following command, as it includes `npm run dev`:

```sh
composer run dev
```

This command will start the Vite development server and enable hot module replacement (HMR). Your browser should automatically refresh when you make changes to the watched files.

## Step 4: Verify Browser Refresh

Make changes to your Blade views, routes, or other watched files to verify that the browser refreshes automatically. If everything is set up correctly, you should see the changes reflected in the browser without needing to manually refresh the page.
