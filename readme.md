Very simple custom photo gallery site for myself.

This is the front end, mostly just PHP and a bit of JavaScript. The back end is on a self-hosted [Directus](https://directus.io/) instance. 

## The problem

For my photography hobby I wanted a simple and super-clean gallery site along the lines of that of [Joseph O. Holmes](https://josephholmes.io/) or [Peter Franc](http://peterfranc.com/). I liked the idea of going without thumbnails and flicking through horizontally, with the navigation on the side, and a simple and responsive experience for mobile.

You would think that it would be easy to pick one of several solutions that meet that criteria, but no pre-made solution really worked. It either comes down to a pricy hosted solution or using WordPress with either a free theme which tend to be unreliable or a premium theme which cost money, but more importantly tend to be waaay overbloated for my needs. I wanted a site that's clean, not just in look but in code. I wanted it to be FAST. Simple to use, and simple for me to modify.

## The solution

So I decided on a headless CMS aproach, since I had tried out Directus before and liked it.