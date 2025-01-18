import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    presets: [preset],
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './app/Http/Livewire/**/*.php',
        './resources/views/livewire/**/*.blade.php',
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flyonui/dist/js/*.js",
    ],
    plugins: [
        require("flyonui"),
        require("flyonui/plugin") // Require only if you want to use FlyonUI JS component
    ],
}
