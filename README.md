CodeIgniter-2-1-4-tweaked
=========================

CI 2.1.4 with some basic modifications, ready for project use

This is the base template I use for hitting the ground running on projects. 

* .gitignore with some default entries
* [Sparks](http://www.getsparks.org/) installed
* Config files dynamically detecting development vs. production environments
* No more underscore in session cookie names (for security purposes)
* A basic MY_Controller to inherit from since we're probably going to end up using one eventually
* CI Profiler turned on
* An encryption key to get started (change to your own)
* Basic CI .htaccess and config changes for pretty URL's (removes index.php from your URL's)
* A default base_url
