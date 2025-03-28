import { startStimulusApp } from '@symfony/stimulus-bridge';

// Start the Stimulus app and load the controllers
const app = startStimulusApp(require.context(
    '@symfony/stimulus-bridge/lazy-controller-loader!./controllers',
    true,
    /\.[jt]sx?$/
));

// Register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);
