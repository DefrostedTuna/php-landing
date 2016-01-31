<!DOCTYPE html>
<html>
<head>
    <title>Static</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- for mobile, yo -->

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"> <!-- required for animations -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css"> <!-- user css -->

    <!-- Scripts -->


</head>
<body>
<div class="root-body">
  <div class="headings-wrap">
    <h1>Headings</h1>
    <hr>
    <h1>Heading 1 - (3.157rem)</h1>
    <h2>Heading 2 - (2.369rem)</h2>
    <h3>Heading 3 - (1.777rem)</h3>
    <h4>Heading 4 - (1.333rem)</h4>
    <h5>Heading 5 - (1rem)</h5>
    <h6>Heading 6 - (1rem)</h6>
  </div> <!-- headings-wrap -->
  <hr>
  <div class="paragraphs-wrap">
    <h1>Paragraph text</h1>
    <div class="paragraph-no-width">
      <h3>Without a max width</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="paragraph-max-width">
      <h3>With $ut-paragraph-width-readable</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div> <!-- paragraphs-wrap -->
  <hr>
  <div class="blockquote-wrap">
    <h1>Blockquote</h1>
    <h3>Without a max width</h3>
    <div class="paragraph-no-width">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </blockquote>
    </div>
    <h3>With $ut-paragraph-width-readable</h3>
    <div class="paragraph-max-width">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </blockquote>
    </div>
  </div> <!-- blockquote-wrap -->
  <hr>
  <div class="lists-wrap">
    <h1>Lists</h1>
    <h3>Ordered list</h3>
    <ol>
      <li>This is list item number 1</li>
      <li>This is list item number 2</li>
      <li>This is list item number 3</li>
      <li>This is list item number 4</li>
      <li>This is list item number 5</li>
    </ol>
    <h3>Unordered list</h3>
    <ul>
      <li>This is list item number 1</li>
      <li>This is list item number 2</li>
      <li>This is list item number 3</li>
      <li>This is list item number 4</li>
      <li>This is list item number 5</li>
    </ul>
  </div> <!-- lists-wrap -->
  <hr>
  <div class="tables-wrap">
    <h1>Tables</h1>
    <table cellspacing="0" cellpadding="0">
        <tr>
            <th>Table Header 1</th><th>Table Header 2</th><th>Table Header 3</th>
        </tr>
        <tr>
            <td>Division 1</td><td>Division 2</td><td>Division 3</td>
        </tr>
        <tr class="even">
            <td>Division 1</td><td>Division 2</td><td>Division 3</td>
        </tr>
        <tr>
            <td>Division 1</td><td>Division 2</td><td>Division 3</td>
        </tr>
    </table>
  </div> <!-- tables-wrap -->
  <hr>
  <div class="preformatted-wrap">
    <h1>Preformatted text</h1>
    <pre>P R E F O R M A T T E D T E X T
! " # $ % &amp; ' ( ) * + , - . /
0 1 2 3 4 5 6 7 8 9 : ; &lt; = &gt; ?
@ A B C D E F G H I J K L M N O
P Q R S T U V W X Y Z [ \ ] ^ _
` a b c d e f g h i j k l m n o
p q r s t u v w x y z { | } ~ </pre>
  </div> <!-- preformatted-wrap -->
  <hr>
  <div class="inlines-wrap">
    <h1>Inline elements</h1>
    <p><a href="#">This is a text link</a></p>

    <p><strong>Strong is used to indicate strong importance.</strong></p>

    <p><em>This text has added emphasis.</em></p>

    <p>The <b>b element</b> is stylistically different text from normal text, without any special importance.</p>

    <p>The <i>i element</i> is text that is offset from the normal text.</p>

    <p>The <u>u element</u> is text with an unarticulated, though explicitly rendered, non-textual annotation.</p>

    <p><del>This text is deleted</del> and <ins>This text is inserted</ins>.</p>

    <p><s>This text has a strikethrough</s>.</p>

    <p>Superscript<sup>®</sup>.</p>

    <p>Subscript for things like H<sub>2</sub>O.</p>

    <p><small>This small text is small for for fine print, etc.</small></p>

    <p>Abbreviation: <abbr title="HyperText Markup Language">HTML</abbr></p>

    <p><q cite="https://developer.mozilla.org/en-US/docs/HTML/Element/q">This text is a short inline quotation.</q></p>

    <p><cite>This is a citation.</cite>

    </p><p>The <dfn>dfn element</dfn> indicates a definition.</p>

    <p>The <mark>mark element</mark> indicates a highlight.</p>

    <p>The <var>variable element</var>, such as <var>x</var> = <var>y</var>.</p>

    <p>The time element: <time datetime="2013-04-06T12:32+00:00">2 weeks ago</time></p>
  </div> <!-- inlines-wrap -->
  <hr>
  <div class="embededs-wrap">
    <h1>Embedded content</h1>

    <div class="embeded-images">
        <h4>Images</h4>
        <div>
            <h6>No <code>&lt;figure&gt;</code> element</h6>
            <p><img src="http://placekitten.com/480/480" alt="Image alt text"></p>
            <h6>Wrapped in a <code>&lt;figure&gt;</code> element, no <code>&lt;figcaption&gt;</code></h6>
            <figure><img src="http://placekitten.com/420/420" alt="Image alt text"></figure>
            <h6>Wrapped in a <code>&lt;figure&gt;</code> element, with a <code>&lt;figcaption&gt;</code></h6>
            <figure>
                <img src="http://placekitten.com/420/420" alt="Image alt text">
                <figcaption>Here is a caption for this image.</figcaption>
            </figure>
        </div>
    </div>

    <div class="embeded-audio">
        <h4>Audio</h4>
        <div><audio controls="">audio</audio></div>
    </div>

    <div class="embeded-video">
        <h4>Video</h4>
        <div><video controls="">video</video></div>
    </div>

    <div class="embeded-meter">
        <h4>Meter</h4>
        <div><meter value="2" min="0" max="10">2 out of 10</meter></div>
    </div>

    <div class="embeded-progress">
        <h4>Progress</h4>
        <div><progress>progress</progress></div>
    </div>

    <div class="embeded-svg">
        <h4>Inline SVG</h4>
        <div><svg width="100px" height="100px"><circle cx="100" cy="100" r="100" fill="#1fa3ec"></circle></svg></div>
    </div>

    <div class="embeded-iframe">
      <h4>iframe</h4>
      <div>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/E32oMJFSsB0" frameborder="0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  <hr>
  <div class="forms-wrap">
    <h1>Form elements</h1>
    <form>
      <fieldset id="forms__input">
        <legend>Text based inputs</legend>
        <div>
          <label for="input__password">Password</label>
          <input id="input__password" type="password" placeholder="Type your Password">
        </div>
        <div>
          <label for="input__webaddress">Web Address</label>
          <input id="input__webaddress" type="url" placeholder="http://yoursite.com">
        </div>
        <div>
          <label for="input__emailaddress">Email Address</label>
          <input id="input__emailaddress" type="email" placeholder="name@email.com">
        </div>
        <div>
          <label for="input__phone">Phone Number</label>
          <input id="input__phone" type="tel" placeholder="(999) 999-9999">
        </div>
        <div>
          <label for="input__search">Search</label>
          <input id="input__search" type="search" placeholder="Enter Search Term">
        </div>
        <div>
          <label for="input__text2">Number Input</label>
          <input id="input__text2" type="number" placeholder="Enter a Number">
        </div>
        <div>
          <label for="input__text3" class="error">Error</label>
          <input id="input__text3" class="is-error" type="text" placeholder="Text Input">
        </div>
        <div>
          <label for="input__text4" class="valid">Valid</label>
          <input id="input__text4" class="is-valid" type="text" placeholder="Text Input">
        </div>
      </fieldset>

      <fieldset id="forms__select">
        <legend>Select menus</legend>
        <div>
          <label for="select">Select</label>
          <select id="select">
            <optgroup label="Option Group">
              <option>Option One</option>
              <option>Option Two</option>
              <option>Option Three</option>
            </optgroup>
          </select>
        </div>
      </fieldset>

      <fieldset id="forms__checkbox">
        <legend>Checkboxes</legend>
        <ul class="list list--bare">
          <li><label for="checkbox1"><input id="checkbox1" name="checkbox" type="checkbox" checked="checked"> Choice A</label></li>
          <li><label for="checkbox2"><input id="checkbox2" name="checkbox" type="checkbox"> Choice B</label></li>
          <li><label for="checkbox3"><input id="checkbox3" name="checkbox" type="checkbox"> Choice C</label></li>
        </ul>
      </fieldset>

      <fieldset id="forms__radio">
        <legend>Radio buttons</legend>
        <ul class="list list--bare">
          <li><label for="radio1"><input id="radio1" name="radio" type="radio" class="radio" checked="checked"> Option 1</label></li>
          <li><label for="radio2"><input id="radio2" name="radio" type="radio" class="radio"> Option 2</label></li>
          <li><label for="radio3"><input id="radio3" name="radio" type="radio" class="radio"> Option 3</label></li>
        </ul>
      </fieldset>

      <fieldset id="forms__textareas">
        <legend>Textareas</legend>
        <div>
          <label for="textarea">Textarea</label>
          <textarea id="textarea" rows="8" cols="48" placeholder="Enter your message here"></textarea>
        </div>
      </fieldset>

      <fieldset id="forms__html5">
        <legend>HTML5 inputs</legend>
        <div>
          <label for="ic">Color input</label>
          <input type="color" id="ic" value="#000000">
        </div>
        <div>
          <label for="in">Number input</label>
          <input type="number" id="in" min="0" max="10" value="5">
        </div>
        <div>
          <label for="ir">Range input</label>
          <input type="range" id="ir" value="10">
        </div>
        <div>
          <label for="idd">Date input</label>
          <input type="date" id="idd" value="1970-01-01">
        </div>
        <div>
          <label for="idm">Month input</label>
          <input type="month" id="idm" value="1970-01">
        </div>
        <div>
          <label for="idw">Week input</label>
          <input type="week" id="idw" value="1970-W01">
        </div>
        <div>
          <label for="idt">Datetime input</label>
          <input type="datetime" id="idt" value="1970-01-01T00:00:00Z">
        </div>
        <div>
          <label for="idtl">Datetime-local input</label>
          <input type="datetime-local" id="idtl" value="1970-01-01T00:00">
        </div>
      </fieldset>

      <fieldset id="forms__action">
        <legend>Action buttons</legend>
        <div>
          <input type="submit" value="Input">
          <button type="submit">Button</button>
          <input type="reset" value="Reset">
          <input type="submit" value="Disabled" disabled>
        </div>
      </fieldset>
    </form>
  </div> <!-- forms-wrap -->
  <hr>
  <!-- Custom modules from here down -->
  <h1 class="custom-module-header">Custom modules</h1>
  <div class="awesome-form-wrap">
    <h1>Awesome form</h1>
    <fieldset>
      <legend>Awesome text inputs</legend>
      <form class="awesome-form">
          <div class="input-group">
              <input type="text">
              <label>Text input</label>
          </div>
          <div class="input-group">
              <input type="email">
              <label>Email input</label>
          </div>
          <div class="input-group">
              <input type="password">
              <label>Password input</label>
          </div>
          <button type="submit" class="ut-button ut-button-awesome-form"><i class="fa fa-lg fa-upload"></i>Submit</i></button>
      </form>
    </fieldset>
  </div> <!-- awesome-form-wrap -->
  <hr>
  <div class="buttons-wrap">
    <h1>Buttons</h1>
    <div class="buttons-flat-wrap">
      <h3>Flat buttons</h3>
      <button class="ut-button ut-button-flat-black">Button</button>
      <button class="ut-button ut-button-flat-aqua">Button</button>
      <button class="ut-button ut-button-flat-blue">Button</button>
      <button class="ut-button ut-button-flat-green">Button</button>
      <button class="ut-button ut-button-flat-orange">Button</button>
      <button class="ut-button ut-button-flat-pink">Button</button>
      <button class="ut-button ut-button-flat-purple">Button</button>
      <button class="ut-button ut-button-flat-red">Button</button>
      <button class="ut-button ut-button-flat-yellow">Button</button>
      <button class="ut-button ut-button-flat-yellow" disabled>Disabled</button>
    </div>
    <div class="buttons-line-wrap">
      <h3>Line buttons</h3>
      <button class="ut-button ut-button-line-black">Button</button>
      <button class="ut-button ut-button-line-aqua">Button</button>
      <button class="ut-button ut-button-line-blue">Button</button>
      <button class="ut-button ut-button-line-green">Button</button>
      <button class="ut-button ut-button-line-orange">Button</button>
      <button class="ut-button ut-button-line-pink">Button</button>
      <button class="ut-button ut-button-line-purple">Button</button>
      <button class="ut-button ut-button-line-red">Button</button>
      <button class="ut-button ut-button-line-yellow">Button</button>
      <button class="ut-button ut-button-line-yellow" disabled>Disabled</button>
    </div>
    <div class="buttons-pill-wrap">
      <h3>Pill buttons</h3>
      <button class="ut-button ut-button-pill-black">Button</button>
      <button class="ut-button ut-button-pill-aqua">Button</button>
      <button class="ut-button ut-button-pill-blue">Button</button>
      <button class="ut-button ut-button-pill-green">Button</button>
      <button class="ut-button ut-button-pill-orange">Button</button>
      <button class="ut-button ut-button-pill-pink">Button</button>
      <button class="ut-button ut-button-pill-purple">Button</button>
      <button class="ut-button ut-button-pill-red">Button</button>
      <button class="ut-button ut-button-pill-yellow">Button</button>
      <button class="ut-button ut-button-pill-yellow"disabled>Disabled</button>
    </div>
  </div> <!-- buttons-wrap -->
  <hr>
  <div class="modals-button-wrap">
    <h1>Modals</h1>
    <div>
      <button data-ut-modal-target="modal-test" class="ut-button ut-trigger-1 ut-modal-trigger"><i class="fa fa-lg fa-arrows-alt"></i>Open a modal</button>
      <button data-ut-modal-target="modal-test2" class="ut-button ut-trigger-2 ut-modal-trigger "><i class="fa fa-lg fa-arrows-alt"></i>Open a modal</button>
    </div>
  </div> <!-- modals-button-wrap -->
  <hr>
  <div class="flash-message-wrap">
    <h1>Flash messages</h1>
    <div class="flash-messages">
      <div class="flash-hide-error">
        <i class="fa fa-exclamation-triangle"></i>
        <p>This is the error message text! Click me, I fade out!</p>
      </div>
      <div class="flash-hide-success">
        <i class="fa fa-exclamation-triangle"></i>
        <p>This is the success message text!</p>
        <p>I have more than one line of text man.</p>
      </div>
      <div class="flash-hide-alert">
        <i class="fa fa-exclamation-triangle"></i>
        <p>This is the alert message text!</p>
        <p>I have even more lines of text than the last!</p>
        <p>Because I have 3 paragraph tags...</p>
      </div>
      <div class="flash-hide-info">
        <i class="fa fa-exclamation-triangle"></i>
        <p>This is the info message text!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="flash-hide-box">
        <i class="fa fa-exclamation-triangle"></i>
        <p>This is the custom color message text!</p>
        <p>You can even define custom colors, this is "<code>+ut-flash(tint(#477DCA, 25%))</code>"!</p>
      </div>
      <div class="flash-messages-reload-wrap">
        <button class="ut-button ut-button-reload-flash"><i class="fa fa-lg fa-spin fa-refresh"></i>Get them back!</button>
      </div>
    </div> <!-- flash-messages -->
  </div><!-- flash-message-wrap -->
  <hr>
  <div class="lost-wrapper">
    <h1>Lost grid</h1>
    <div class="lost-container">
      <h3>Grid container</h3>
      <div class="row-1">
        <h5>Row 1</h5>
        <div><p>1/4th</p></div>
        <div><p>1/4th</p></div>
        <div><p>1/4th</p></div>
        <div><p>1/4th</p></div>
      </div>
      <div class="row-2">
        <h5>Row 2</h5>
        <div><p>1/3rd</p></div>
        <div><p>1/3rd</p></div>
        <div><p>1/3rd</p></div>
      </div>
      <div class="row-3">
        <h5>Row 3</h5>
        <div><p>2/3rd</p></div>
        <div><p>1/3rd</p></div>
      </div>
      <div class="row-4">
        <h5>Row 4</h5>
        <div><p>1/4th</p></div>
        <div><p>3/4th</p></div>
      </div>
      <div class="row-5">
        <h5>Row 5</h5>
        <div><p>Half</p></div>
        <div><p>Half</p></div>
      </div>
    </div>
  </div> <!-- lost-wrapper -->
  <hr>
  <div class="more">
      <h1>More to come, yo!</h1>
  </div>
  <hr>
<!-- END OF BODY -->
</div>
<!-- END OF BODY -->

<!-- Start of modals -->
<div class="root-modals">
  <!-- Modal 1 -->
  <div id="modal-test" class="">
    <div class="ut-modal-outer">
      <div class="ut-modal-inner">
        <i class="fa fa-times fa-2x ut-modal-close" data-ut-modal-target="modal-test"></i>
        <h2 class="ut-modal-header">Modal Header</h2>
        <div class="ut-modal-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="ut-modal-footer">
          <button class="ut-button ut-button-modal-close ut-modal-close" data-ut-modal-target="modal-test">Dismiss</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div id="modal-test2" class="">
    <div class="ut-modal-outer">
      <div class="ut-modal-inner">
        <i class="fa fa-times fa-2x ut-modal-close" data-ut-modal-target="modal-test2"></i>
        <h2 class="ut-modal-header">Modal Header2</h2>
        <div class="ut-modal-body">
          <div class="iframe-wrap">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/JBEOdFvQTcQ" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="ut-modal-footer">
          <p>Some extra text to go along with the video. Probably a description of sorts or something.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <h3><strong>Dood, this video is responsive as well!<strong></h3>
        </div>
      </div>
    </div>
  </div>
</div> <!-- // root-modals // -->
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script> <!-- required -->
<script src="assets/js/compiled.js"></script> <!-- user js sheet -->
<script src="assets/js/app.js"></script> <!-- user js sheet -->
</body>
