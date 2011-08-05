##Use Zend\Di in Zend Framework v1 application##

### What? ###
Quick example to illustrate one possible way to use Zend\Di from Zend Framework 2 in your existing Zend_Application-based Zend Framework 1.x site. 

### Why? ###
Zend Framework 2.0.0dev3 was released this week with a first official look at the Dependency Injection component; I figured i'd spend some time kicking it's tires, and this is the result. 

### Usage? ###

* Fetch the ZF2 release 2.0.0dev3 (https://github.com/zendframework/zf2/tree/release-2.0.0dev3)
* Make sure you have Zend Framework v1.11.x on your PHP `include_path`
* Clone this repo somewhere into your webroot
* Copy `public/.htaccess.dist` to `public/.htaccess` and set ZF2_LIBRARY_PATH to the `library` folder of your local copy of ZF2 v2.0.0dev3
* Fire up your web browser and go to 
        
            http://your-host/path/to/zf-examples/zf2-di-in-zf1/public

  And it should work! (hopefully)

### Resources ###
Some goodies made by other people, just for you

* [Zend\Di Quickstart on ZF2 wiki](http://www.zendframework.com/wiki/display/ZFDEV2/Zend+DI+QuickStart)
* [Ralph Schindler's ZF2ByExample has been updated with examples using the Zend\Di component](https://github.com/ralphschindler/ZF2ByExample)

### The usual fine print...###
This code is considered proof-of-concept, and has not been vetted or tested for inclusion in a production environment. Use of this code in such environments is at your own risk.
Released under the New BSD license. See file LICENSE included with the source code for this project for a copy of the licensing terms. 