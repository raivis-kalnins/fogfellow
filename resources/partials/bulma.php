<?php
/**
 * ICE Examples Partial
 *
 * @package    dp
 * @author     DP <hello@digitalpulse.click>
 * @copyright  Digital Pulse
 */
?>

<section>
<!--GRID-->
	<div class="columns">
  <div class="column">
	First column
  </div>
  <div class="column">
	Second column
  </div>
  <div class="column">
	Third column
  </div>
  <div class="column">
	Fourth column
  </div>
</div>
</section>


<section class="section">
<!--FORM-->
 <div class="field">
  <label class="label">Name</label>
  <div class="control">
	<input class="input" type="text" placeholder="Text input">
  </div>
</div>

<div class="field">
  <label class="label">Username</label>
  <div class="control has-icons-left has-icons-right">
	<input class="input is-success" type="text" placeholder="Text input" value="bulma">
	<span class="icon is-small is-left">
	  <i class="fas fa-user"></i>
	</span>
	<span class="icon is-small is-right">
	  <i class="fas fa-check"></i>
	</span>
  </div>
  <p class="help is-success">This username is available</p>
</div>

<div class="field">
  <label class="label">Email</label>
  <div class="control has-icons-left has-icons-right">
	<input class="input is-danger" type="email" placeholder="Email input" value="hello@">
	<span class="icon is-small is-left">
	  <i class="fas fa-envelope"></i>
	</span>
	<span class="icon is-small is-right">
	  <i class="fas fa-exclamation-triangle"></i>
	</span>
  </div>
  <p class="help is-danger">This email is invalid</p>
</div>

<div class="field">
  <label class="label">Subject</label>
  <div class="control">
	<div class="select">
	  <select>
		<option>Select dropdown</option>
		<option>With options</option>
	  </select>
	</div>
  </div>
</div>

<div class="field">
  <label class="label">Message</label>
  <div class="control">
	<textarea class="textarea" placeholder="Textarea"></textarea>
  </div>
</div>

<div class="field">
  <div class="control">
	<label class="checkbox">
	  <input type="checkbox">
	  I agree to the <a href="#">terms and conditions</a>
	</label>
  </div>
</div>

<div class="field">
  <div class="control">
	<label class="radio">
	  <input type="radio" name="question">
	  Yes
	</label>
	<label class="radio">
	  <input type="radio" name="question">
	  No
	</label>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
	<button class="button is-link">Submit</button>
  </div>
  <div class="control">
	<button class="button is-text">Cancel</button>
  </div>
</div>

</section>

<section class="section">
<!--HORIZONTAL FORM-->
<div class="field is-horizontal">
  <div class="field-label is-normal">
	<label class="label">From</label>
  </div>
  <div class="field-body">
	<div class="field">
	  <p class="control is-expanded has-icons-left">
		<input class="input" type="text" placeholder="Name">
		<span class="icon is-small is-left">
		  <i class="fas fa-user"></i>
		</span>
	  </p>
	</div>
	<div class="field">
	  <p class="control is-expanded has-icons-left has-icons-right">
		<input class="input is-success" type="email" placeholder="Email" value="alex@smith.com">
		<span class="icon is-small is-left">
		  <i class="fas fa-envelope"></i>
		</span>
		<span class="icon is-small is-right">
		  <i class="fas fa-check"></i>
		</span>
	  </p>
	</div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label"></div>
  <div class="field-body">
	<div class="field is-expanded">
	  <div class="field has-addons">
		<p class="control">
		  <a class="button is-static">
			+44
		  </a>
		</p>
		<p class="control is-expanded">
		  <input class="input" type="tel" placeholder="Your phone number">
		</p>
	  </div>
	  <p class="help">Do not enter the first zero</p>
	</div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
	<label class="label">Department</label>
  </div>
  <div class="field-body">
	<div class="field is-narrow">
	  <div class="control">
		<div class="select is-fullwidth">
		  <select>
			<option>Business development</option>
			<option>Marketing</option>
			<option>Sales</option>
		  </select>
		</div>
	  </div>
	</div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label">
	<label class="label">Already a member?</label>
  </div>
  <div class="field-body">
	<div class="field is-narrow">
	  <div class="control">
		<label class="radio">
		  <input type="radio" name="member">
		  Yes
		</label>
		<label class="radio">
		  <input type="radio" name="member">
		  No
		</label>
	  </div>
	</div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
	<label class="label">Subject</label>
  </div>
  <div class="field-body">
	<div class="field">
	  <div class="control">
		<input class="input is-danger" type="text" placeholder="e.g. Partnership opportunity">
	  </div>
	  <p class="help is-danger">
		This field is required
	  </p>
	</div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label is-normal">
	<label class="label">Question</label>
  </div>
  <div class="field-body">
	<div class="field">
	  <div class="control">
		<textarea class="textarea" placeholder="Explain how we can help you"></textarea>
	  </div>
	</div>
  </div>
</div>

<div class="field is-horizontal">
  <div class="field-label">
	<!-- Left empty for spacing -->
  </div>
  <div class="field-body">
	<div class="field">
	  <div class="control">
		<button class="button is-primary">
		  Send message
		</button>
	  </div>
	</div>
  </div>
</div>

</section>

<section class="section">

<!--FILE-->
<div class="file has-name is-boxed">
  <label class="file-label">
	<input class="file-input" type="file" name="resume">
	<span class="file-cta">
	  <span class="file-icon">
		<i class="fas fa-upload"></i>
	  </span>
	  <span class="file-label">
		Choose a file…
	  </span>
	</span>
	<span class="file-name">
	  Screen Shot 2017-07-29 at 15.54.25.png
	</span>
  </label>
</div>

</section>

<section class="section">

<!--BOX-->
<div class="box">
  <article class="media">
	<div class="media-left">
	  <figure class="image is-64x64">
		<img src="https://bulma.io/images/placeholders/128x128.png" alt="Image">
	  </figure>
	</div>
	<div class="media-content">
	  <div class="content">
		<p>
		  <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
		  <br>
		  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
		</p>
	  </div>
	  <nav class="level is-mobile">
		<div class="level-left">
		  <a class="level-item" aria-label="reply">
			<span class="icon is-small">
			  <i class="fas fa-reply" aria-hidden="true"></i>
			</span>
		  </a>
		  <a class="level-item" aria-label="retweet">
			<span class="icon is-small">
			  <i class="fas fa-retweet" aria-hidden="true"></i>
			</span>
		  </a>
		  <a class="level-item" aria-label="like">
			<span class="icon is-small">
			  <i class="fas fa-heart" aria-hidden="true"></i>
			</span>
		  </a>
		</div>
	  </nav>
	</div>
  </article>
</div>

</section>

<section class="section">

<!--DELETE / TAG / NOTIFICATION / MESSAGE -->

<div class="block">
  <span class="tag is-success">
	Hello World
	<button class="delete is-small"></button>
  </span>
</div>

<div class="notification is-danger">
  <button class="delete"></button>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit lorem ipsum dolor sit amet, consectetur adipiscing elit
</div>

<article class="message is-info">
  <div class="message-header">
	Info
	<button class="delete"></button>
  </div>
  <div class="message-body">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque risus mi, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum felis venenatis efficitur. Aenean ac eleifend lacus, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</article>

</section>

<section class="section">

<!--IMAGE-->
 <figure class="image is-128x128">
  <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
</figure>

</section>

<section class="section">

<!--PROGRESS-->

<progress class="progress is-small is-primary" max="100">15%</progress>
<progress class="progress is-danger" max="100">30%</progress>
<progress class="progress is-medium is-dark" max="100">45%</progress>
<progress class="progress is-large is-info" max="100">60%</progress>

</section>

<section class="section">
<table class="table">
  <thead>
	<tr>
	  <th><abbr title="Position">Pos</abbr></th>
	  <th>Team</th>
	  <th><abbr title="Played">Pld</abbr></th>
	  <th><abbr title="Won">W</abbr></th>
	  <th><abbr title="Drawn">D</abbr></th>
	  <th><abbr title="Lost">L</abbr></th>
	  <th><abbr title="Goals for">GF</abbr></th>
	  <th><abbr title="Goals against">GA</abbr></th>
	  <th><abbr title="Goal difference">GD</abbr></th>
	  <th><abbr title="Points">Pts</abbr></th>
	  <th>Qualification or relegation</th>
	</tr>
  </thead>
  <tfoot>
	<tr>
	  <th><abbr title="Position">Pos</abbr></th>
	  <th>Team</th>
	  <th><abbr title="Played">Pld</abbr></th>
	  <th><abbr title="Won">W</abbr></th>
	  <th><abbr title="Drawn">D</abbr></th>
	  <th><abbr title="Lost">L</abbr></th>
	  <th><abbr title="Goals for">GF</abbr></th>
	  <th><abbr title="Goals against">GA</abbr></th>
	  <th><abbr title="Goal difference">GD</abbr></th>
	  <th><abbr title="Points">Pts</abbr></th>
	  <th>Qualification or relegation</th>
	</tr>
  </tfoot>
  <tbody>
	<tr>
	  <th>1</th>
	  <td><a href="https://en.wikipedia.org/wiki/Leicester_City_F.C." title="Leicester City F.C.">Leicester City</a> <strong>(C)</strong>
	  </td>
	  <td>38</td>
	  <td>23</td>
	  <td>12</td>
	  <td>3</td>
	  <td>68</td>
	  <td>36</td>
	  <td>+32</td>
	  <td>81</td>
	  <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
	</tr>
	<tr>
	  <th>2</th>
	  <td><a href="https://en.wikipedia.org/wiki/Arsenal_F.C." title="Arsenal F.C.">Arsenal</a></td>
	  <td>38</td>
	  <td>20</td>
	  <td>11</td>
	  <td>7</td>
	  <td>65</td>
	  <td>36</td>
	  <td>+29</td>
	  <td>71</td>
	  <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
	</tr>
	<tr>
	  <th>3</th>
	  <td><a href="https://en.wikipedia.org/wiki/Tottenham_Hotspur_F.C." title="Tottenham Hotspur F.C.">Tottenham Hotspur</a></td>
	  <td>38</td>
	  <td>19</td>
	  <td>13</td>
	  <td>6</td>
	  <td>69</td>
	  <td>35</td>
	  <td>+34</td>
	  <td>70</td>
	  <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Group_stage" title="2016–17 UEFA Champions League">Champions League group stage</a></td>
	</tr>
	<tr class="is-selected">
	  <th>4</th>
	  <td><a href="https://en.wikipedia.org/wiki/Manchester_City_F.C." title="Manchester City F.C.">Manchester City</a></td>
	  <td>38</td>
	  <td>19</td>
	  <td>9</td>
	  <td>10</td>
	  <td>71</td>
	  <td>41</td>
	  <td>+30</td>
	  <td>66</td>
	  <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Champions_League#Play-off_round" title="2016–17 UEFA Champions League">Champions League play-off round</a></td>
	</tr>
	<tr>
	  <th>5</th>
	  <td><a href="https://en.wikipedia.org/wiki/Manchester_United_F.C." title="Manchester United F.C.">Manchester United</a></td>
	  <td>38</td>
	  <td>19</td>
	  <td>9</td>
	  <td>10</td>
	  <td>49</td>
	  <td>35</td>
	  <td>+14</td>
	  <td>66</td>
	  <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Group_stage" title="2016–17 UEFA Europa League">Europa League group stage</a></td>
	</tr>
	<tr>
	  <th>6</th>
	  <td><a href="https://en.wikipedia.org/wiki/Southampton_F.C." title="Southampton F.C.">Southampton</a></td>
	  <td>38</td>
	  <td>18</td>
	  <td>9</td>
	  <td>11</td>
	  <td>59</td>
	  <td>41</td>
	  <td>+18</td>
	  <td>63</td>
	  <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Group_stage" title="2016–17 UEFA Europa League">Europa League group stage</a></td>
	</tr>
	<tr>
	  <th>7</th>
	  <td><a href="https://en.wikipedia.org/wiki/West_Ham_United_F.C." title="West Ham United F.C.">West Ham United</a></td>
	  <td>38</td>
	  <td>16</td>
	  <td>14</td>
	  <td>8</td>
	  <td>65</td>
	  <td>51</td>
	  <td>+14</td>
	  <td>62</td>
	  <td>Qualification for the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_UEFA_Europa_League#Third_qualifying_round" title="2016–17 UEFA Europa League">Europa League third qualifying round</a></td>
	</tr>
	<tr>
	  <th>8</th>
	  <td><a href="https://en.wikipedia.org/wiki/Liverpool_F.C." title="Liverpool F.C.">Liverpool</a></td>
	  <td>38</td>
	  <td>16</td>
	  <td>12</td>
	  <td>10</td>
	  <td>63</td>
	  <td>50</td>
	  <td>+13</td>
	  <td>60</td>
	  <td></td>
	</tr>
	<tr>
	  <th>9</th>
	  <td><a href="https://en.wikipedia.org/wiki/Stoke_City_F.C." title="Stoke City F.C.">Stoke City</a></td>
	  <td>38</td>
	  <td>14</td>
	  <td>9</td>
	  <td>15</td>
	  <td>41</td>
	  <td>55</td>
	  <td>−14</td>
	  <td>51</td>
	  <td></td>
	</tr>
	<tr>
	  <th>10</th>
	  <td><a href="https://en.wikipedia.org/wiki/Chelsea_F.C." title="Chelsea F.C.">Chelsea</a></td>
	  <td>38</td>
	  <td>12</td>
	  <td>14</td>
	  <td>12</td>
	  <td>59</td>
	  <td>53</td>
	  <td>+6</td>
	  <td>50</td>
	  <td></td>
	</tr>
	<tr>
	  <th>11</th>
	  <td><a href="https://en.wikipedia.org/wiki/Everton_F.C." title="Everton F.C.">Everton</a></td>
	  <td>38</td>
	  <td>11</td>
	  <td>14</td>
	  <td>13</td>
	  <td>59</td>
	  <td>55</td>
	  <td>+4</td>
	  <td>47</td>
	  <td></td>
	</tr>
	<tr>
	  <th>12</th>
	  <td><a href="https://en.wikipedia.org/wiki/Swansea_City_A.F.C." title="Swansea City A.F.C.">Swansea City</a></td>
	  <td>38</td>
	  <td>12</td>
	  <td>11</td>
	  <td>15</td>
	  <td>42</td>
	  <td>52</td>
	  <td>−10</td>
	  <td>47</td>
	  <td></td>
	</tr>
	<tr>
	  <th>13</th>
	  <td><a href="https://en.wikipedia.org/wiki/Watford_F.C." title="Watford F.C.">Watford</a></td>
	  <td>38</td>
	  <td>12</td>
	  <td>9</td>
	  <td>17</td>
	  <td>40</td>
	  <td>50</td>
	  <td>−10</td>
	  <td>45</td>
	  <td></td>
	</tr>
	<tr>
	  <th>14</th>
	  <td><a href="https://en.wikipedia.org/wiki/West_Bromwich_Albion_F.C." title="West Bromwich Albion F.C.">West Bromwich Albion</a></td>
	  <td>38</td>
	  <td>10</td>
	  <td>13</td>
	  <td>15</td>
	  <td>34</td>
	  <td>48</td>
	  <td>−14</td>
	  <td>43</td>
	  <td></td>
	</tr>
	<tr>
	  <th>15</th>
	  <td><a href="https://en.wikipedia.org/wiki/Crystal_Palace_F.C." title="Crystal Palace F.C.">Crystal Palace</a></td>
	  <td>38</td>
	  <td>11</td>
	  <td>9</td>
	  <td>18</td>
	  <td>39</td>
	  <td>51</td>
	  <td>−12</td>
	  <td>42</td>
	  <td></td>
	</tr>
	<tr>
	  <th>16</th>
	  <td><a href="https://en.wikipedia.org/wiki/A.F.C._Bournemouth" title="A.F.C. Bournemouth">AFC Bournemouth</a></td>
	  <td>38</td>
	  <td>11</td>
	  <td>9</td>
	  <td>18</td>
	  <td>45</td>
	  <td>67</td>
	  <td>−22</td>
	  <td>42</td>
	  <td></td>
	</tr>
	<tr>
	  <th>17</th>
	  <td><a href="https://en.wikipedia.org/wiki/Sunderland_A.F.C." title="Sunderland A.F.C.">Sunderland</a></td>
	  <td>38</td>
	  <td>9</td>
	  <td>12</td>
	  <td>17</td>
	  <td>48</td>
	  <td>62</td>
	  <td>−14</td>
	  <td>39</td>
	  <td></td>
	</tr>
	<tr>
	  <th>18</th>
	  <td><a href="https://en.wikipedia.org/wiki/Newcastle_United_F.C." title="Newcastle United F.C.">Newcastle United</a> <strong>(R)</strong>
	  </td>
	  <td>38</td>
	  <td>9</td>
	  <td>10</td>
	  <td>19</td>
	  <td>44</td>
	  <td>65</td>
	  <td>−21</td>
	  <td>37</td>
	  <td>Relegation to the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_Football_League_Championship" title="2016–17 Football League Championship">Football League Championship</a></td>
	</tr>
	<tr>
	  <th>19</th>
	  <td><a href="https://en.wikipedia.org/wiki/Norwich_City_F.C." title="Norwich City F.C.">Norwich City</a> <strong>(R)</strong>
	  </td>
	  <td>38</td>
	  <td>9</td>
	  <td>7</td>
	  <td>22</td>
	  <td>39</td>
	  <td>67</td>
	  <td>−28</td>
	  <td>34</td>
	  <td>Relegation to the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_Football_League_Championship" title="2016–17 Football League Championship">Football League Championship</a></td>    </tr>
	<tr>
	  <th>20</th>
	  <td><a href="https://en.wikipedia.org/wiki/Aston_Villa_F.C." title="Aston Villa F.C.">Aston Villa</a> <strong>(R)</strong>
	  </td>
	  <td>38</td>
	  <td>3</td>
	  <td>8</td>
	  <td>27</td>
	  <td>27</td>
	  <td>76</td>
	  <td>−49</td>
	  <td>17</td>
	  <td>Relegation to the <a href="https://en.wikipedia.org/wiki/2016%E2%80%9317_Football_League_Championship" title="2016–17 Football League Championship">Football League Championship</a></td>
	</tr>
  </tbody>
</table>

</section>

<section class="section">
<!--TAG-->
<span class="tag is-black">Black</span>
<span class="tag is-dark">Dark</span>
<span class="tag is-light">Light</span>
<span class="tag is-white">White</span>
<span class="tag is-primary">Primary</span>
<span class="tag is-link">Link</span>
<span class="tag is-info">Info</span>
<span class="tag is-success">Success</span>
<span class="tag is-warning">Warning</span>
<span class="tag is-danger">Danger</span>
</section>

<section class="section">
<!--TITLE-->
<h1 class="title is-1">Title 1</h1>
<p class="subtitle is-3">Subtitle 3</p>

<h2 class="title is-2">Title 2</h2>
<p class="subtitle is-4">Subtitle 4</p>

<p class="title is-3">Title 3</p>
<h3 class="subtitle is-5">Subtitle 5</h3>
</section>

<section class="section">

<!--BREADCRUMBS-->

<nav class="breadcrumb" aria-label="breadcrumbs">
  <ul>
	<li>
	  <a href="#">
		<span class="icon is-small">
		  <i class="fas fa-home" aria-hidden="true"></i>
		</span>
		<span>Bulma</span>
	  </a>
	</li>
	<li>
	  <a href="#">
		<span class="icon is-small">
		  <i class="fas fa-book" aria-hidden="true"></i>
		</span>
		<span>Documentation</span>
	  </a>
	</li>
	<li>
	  <a href="#">
		<span class="icon is-small">
		  <i class="fas fa-puzzle-piece" aria-hidden="true"></i>
		</span>
		<span>Components</span>
	  </a>
	</li>
	<li class="is-active">
	  <a href="#">
		<span>Breadcrumb</span>
	  </a>
	</li>
  </ul>
</nav>

</section>

<section class="section">


<!--CARD-->
<div class="card">
  <div class="card-image">
	<figure class="image is-4by3">
	  <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
	</figure>
  </div>
  <div class="card-content">
	<div class="media">
	  <div class="media-left">
		<figure class="image is-48x48">
		  <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
		</figure>
	  </div>
	  <div class="media-content">
		<p class="title is-4">John Smith</p>
		<p class="subtitle is-6">@johnsmith</p>
	  </div>
	</div>

	<div class="content">
	  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	  Phasellus nec iaculis mauris. <a>@bulmaio</a>.
	  <a href="#">#css</a> <a href="#">#responsive</a>
	  <br>
	  <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
	</div>
  </div>
</div>

</section>

<section class="section">

<div class="dropdown is-active">
  <div class="dropdown-trigger">
	<button class="button" aria-haspopup="true" aria-controls="dropdown-menu2">
	  <span>Content</span>
	  <span class="icon is-small">
		<i class="fas fa-angle-down" aria-hidden="true"></i>
	  </span>
	</button>
  </div>
  <div class="dropdown-menu" id="dropdown-menu2" role="menu">
	<div class="dropdown-content">
	  <div class="dropdown-item">
		<p>You can insert <strong>any type of content</strong> within the dropdown menu.</p>
	  </div>
	  <hr class="dropdown-divider">
	  <div class="dropdown-item">
		<p>You simply need to use a <code>&lt;div&gt;</code> instead.</p>
	  </div>
	  <hr class="dropdown-divider">
	  <a href="#" class="dropdown-item">
		This is a link
	  </a>
	</div>
  </div>
</div>

</section>

<section class="section">

<!--MENU-->

<aside class="menu">
  <p class="menu-label">
	General
  </p>
  <ul class="menu-list">
	<li><a>Dashboard</a></li>
	<li><a>Customers</a></li>
  </ul>
  <p class="menu-label">
	Administration
  </p>
  <ul class="menu-list">
	<li><a>Team Settings</a></li>
	<li>
	  <a class="is-active">Manage Your Team</a>
	  <ul>
		<li><a>Members</a></li>
		<li><a>Plugins</a></li>
		<li><a>Add a member</a></li>
	  </ul>
	</li>
	<li><a>Invitations</a></li>
	<li><a>Cloud Storage Environment Settings</a></li>
	<li><a>Authentication</a></li>
  </ul>
  <p class="menu-label">
	Transactions
  </p>
  <ul class="menu-list">
	<li><a>Payments</a></li>
	<li><a>Transfers</a></li>
	<li><a>Balance</a></li>
  </ul>
</aside>

</section>

<section class="section">
<nav class="panel">
  <p class="panel-heading">
	repositories
  </p>
  <div class="panel-block">
	<p class="control has-icons-left">
	  <input class="input is-small" type="text" placeholder="search">
	  <span class="icon is-small is-left">
		<i class="fas fa-search" aria-hidden="true"></i>
	  </span>
	</p>
  </div>
  <p class="panel-tabs">
	<a class="is-active">all</a>
	<a>public</a>
	<a>private</a>
	<a>sources</a>
	<a>forks</a>
  </p>
  <a class="panel-block is-active">
	<span class="panel-icon">
	  <i class="fas fa-book" aria-hidden="true"></i>
	</span>
	bulma
  </a>
  <a class="panel-block">
	<span class="panel-icon">
	  <i class="fas fa-book" aria-hidden="true"></i>
	</span>
	marksheet
  </a>
  <a class="panel-block">
	<span class="panel-icon">
	  <i class="fas fa-book" aria-hidden="true"></i>
	</span>
	minireset.css
  </a>
  <a class="panel-block">
	<span class="panel-icon">
	  <i class="fas fa-book" aria-hidden="true"></i>
	</span>
	jgthms.github.io
  </a>
  <a class="panel-block">
	<span class="panel-icon">
	  <i class="fas fa-code-branch" aria-hidden="true"></i>
	</span>
	daniellowtw/infboard
  </a>
  <a class="panel-block">
	<span class="panel-icon">
	  <i class="fas fa-code-branch" aria-hidden="true"></i>
	</span>
	mojs
  </a>
  <label class="panel-block">
	<input type="checkbox">
	remember me
  </label>
  <div class="panel-block">
	<button class="button is-link is-outlined is-fullwidth">
	  reset all filters
	</button>
  </div>
</nav>

</section>

<section class="section">


<!--TABS-->
<div class="tabs is-toggle">
  <ul>
	<li class="is-active">
	  <a>
		<span class="icon is-small"><i class="fas fa-image" aria-hidden="true"></i></span>
		<span>Pictures</span>
	  </a>
	</li>
	<li>
	  <a>
		<span class="icon is-small"><i class="fas fa-music" aria-hidden="true"></i></span>
		<span>Music</span>
	  </a>
	</li>
	<li>
	  <a>
		<span class="icon is-small"><i class="fas fa-film" aria-hidden="true"></i></span>
		<span>Videos</span>
	  </a>
	</li>
	<li>
	  <a>
		<span class="icon is-small"><i class="far fa-file-alt" aria-hidden="true"></i></span>
		<span>Documents</span>
	  </a>
	</li>
  </ul>
</div>
<div class="tabs is-centered is-boxed is-medium">
  <ul>
	<li class="is-active">
	  <a>
		<span class="icon is-small"><i class="fas fa-image" aria-hidden="true"></i></span>
		<span>Pictures</span>
	  </a>
	</li>
	<li>
	  <a>
		<span class="icon is-small"><i class="fas fa-music" aria-hidden="true"></i></span>
		<span>Music</span>
	  </a>
	</li>
	<li>
	  <a>
		<span class="icon is-small"><i class="fas fa-film" aria-hidden="true"></i></span>
		<span>Videos</span>
	  </a>
	</li>
	<li>
	  <a>
		<span class="icon is-small"><i class="far fa-file-alt" aria-hidden="true"></i></span>
		<span>Documents</span>
	  </a>
	</li>
  </ul>
</div>


<div class="tabs">
  <ul>
	<li class="is-active"><a>Pictures</a></li>
	<li><a>Music</a></li>
	<li><a>Videos</a></li>
	<li><a>Documents</a></li>
  </ul>
</div>
</section>
