#### Working with Plate Engine

<p align="center">Implementing a simple and native PHP system.</p>


#### Intro
The Plates engine serves to facilitate the organization of your project's templates, making sending and displaying
information for these pages a simpler and more organized process in the view layer. Some of the highlights that
we can mention is the reuse of codes, HTML blocks and use of PHP functions, among others highlighted
no [`site do proprio Plates`](https://platesphp.com/).

<br>

##### Project

In this simple project I demonstrate how to implement one of the most powerful components, the `Plates Engine`.
###### It's a very simple project with the total intention of demonstrating the basic use of the component.

- Install o [`composer`](https://git-scm.com/)
- PHP version `7.4`
- Plates Engine version `v4.0.0-alpha`


<br>

<section>
      <figure class="gif">
            <img src="/plates-engine.gif">
      </figure>
</section>


#### Simple project description

- In the templates directory, it will be where the project's views layer is located and in this directory we can work with page blocks
  HTML and thus assembling the project's pages as needed and reducing code repetition.
  In these views, we work with the structural language and commands of Plates itself.


###### Using the `v` view object
With this Plates object, we can use all native command logic that the component provides.

- Calling the layout template
```
<?= $v->section('content'); ?>
```

- The template page calls the base layout passing data and with parameters received from the controller
```
<?php $this->layout('template', ['title' => 'User Profile']) ?>
<p><?= "{$user->getName()}"; ?></p>
```
 
- I created a Plates class to abstract the engine control layer, so that when starting the view, we can instantiate the
  engine in the constructor and create methods to render the views and already sent all the necessary data for each page,
  add folders and also bring back the view engine instance.

<br>

Contato [rafaelblum_digital@hotmail.com](rafaelblum_digital@hotmail.com)

[![Youtube Badge](https://img.shields.io/badge/-Youtube-FF0000?style=flat-square&labelColor=FF0000&logo=youtube&logoColor=white&link=https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)](https://www.youtube.com/channel/UCMvtn8HZ12Ud-sdkY5KzTog)
[![Linkedin Badge](https://img.shields.io/badge/-LinkedIn-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/rafael-blum-237133114s/)](https://www.linkedin.com/in/rafael-blum-237133114s/)
[![Instagram Badge](https://img.shields.io/badge/-Instagram-violet?style=flat-square&logo=Instagram&logoColor=white&link=https://www.instagram.com/rafablum_/)](https://www.instagram.com/rafablum_/)

