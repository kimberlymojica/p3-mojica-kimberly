# Project 3 Tutorial
This code will show how to set up buttons and images with overlays and animation.

**Last Updated on April 26th, 2021

## Code
In order for this to work correctly for the button, please make sure you create a section as follows

``` html
<section>
<div class="gemblock">
<a href="contact.html">Enquire more</a>
</div>
</section>
```
The `<section>` has to have the dive inside with the `class` name and then the link, followed by the closing `div` and `section`.

The css should look as follows
```CSS
.gemblock {
  display: block;
  width: 150px;
  background-color: #E2A8aF;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  margin: 0px 10px 0 250px;
  font-weight: bold;
  border-radius: 20px;
}
```

In order for your code to work correctly for an image with a hover overlay, create a section as follows

```html
<div class="pic">
 <figure>
  <img src="images/me.png" alt="Kimberly Mojica"  title="creator" width=500 />
  <div class="overlay"> Hello! </div>
  </figure>

  ```
  There must be a `class` name for the image followed by another `class` name for the wording that will appear on the overlay.

  The css should look as follows
  ```CSS
  .overlay {
    position: absolute;
    bottom: 0;
    background: rgb(0, 0, 0);
    background: rgba(0, 0, 0, 0.5); /* Black see-through */
    color: #f1f1f1;
    width: 100%;
    transition: .5s ease;
    opacity:0;
    color: white;
    font-size: 20px;
    padding: 20px;
    text-align: center;
  }

  .pic:hover .overlay{
    opacity: 1;
  }
```

  ## Resources

* [https://www.w3schools.com/howto/howto_css_image_overlay_title.asp]
