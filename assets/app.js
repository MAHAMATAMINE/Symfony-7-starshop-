import { startStimulusApp } from '@symfony/stimulus-bridge';

// Start the Stimulus app
const app = startStimulusApp();

// Registers Stimulus controllers from controllers.json and in the controllers/ directory
startStimulusApp(require.context(
    '@symfony/stimulus-bridge/lazy-controller-loader!./controllers',
    true,
    /\.[jt]sx?$/
));

// You can add any custom, 3rd party controllers here if needed
// app.register('some_controller_name', SomeImportedController);

// Exporting app if needed elsewhere
export default app;
