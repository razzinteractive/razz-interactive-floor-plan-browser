# Razz Interactive Floor Plan Browser

A WordPress plugin for [Razz Interactive](http://razzinteractive.com) clients to connect their site to the Razz Interactive Floor Plan Browser.

## Prerequesites
* jQuery

## Installation
### WordPress Plugin Installation
1. Install and activate [Advanced Custom Fields](https://www.advancedcustomfields.com/) if you don't have it already.
2. Install and activate this plugin.
3. Visit the settings page **(Settings -> Razz Interactive Floor Plan Browser)** and enter the Property ID provided to you by [Razz Interactive](http://razzinteractive.com).

### Non-WordPress Installation
If you're not using WordPress, or just prefer to directly add the script tag to your site, add this tag just above the `</body>` tag, replacing `Property_ID` with the Property ID provided to you by [Razz Interactive](http://razzinteractive.com).

```<script src="https://apt.razzinteractive.com/Property_ID/?widget"></script>```

## Usage
Link to `#!/floor-plans` from anywhere on your site you wish, and it will open the floor plan browser when clicked.
