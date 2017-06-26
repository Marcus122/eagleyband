<?php
add_action( 'admin_menu', 'eagley_help_menu' );

function eagley_help_menu() {
	add_options_page( 'Eagley Help', 'Eagley Help', 'manage_options', 'eagey-help', 'eagley_help_options' );
}

function eagley_help_options() { ?>
    <div class="wrap eagley-help">
        <h1>Eagley Help</h1>
        <p>This page explains guides on how the Eagley wordpress site works.<br/>
            Feel free to contact me at <a href="mailto:christopheratty@gmail.com">christopheratty@gmail.com</a> if you need any help.
        </p>
        
        <h2>Add a new page</h2>
        <p>
            To add a new page, either <a href="/wp-admin/post-new.php?post_type=page">click here</a>, or, using the left hand side navigation, go to Pages > Add New.
            Then follow these steps:
        </p>
        <ol style="padding-left:30px;">
            <li>Enter the title - this is what will display in the page's header.</li>
            <li>Permalink - this will appear once you've entered a title. This is the URL of the page. I would advise you to leave this as it is, but you can change it if you wish.</li>
            <li>
                Content - the actual page content is entered in the large text box. On the top right of this box, there are 2 options - visual and text.
                Visual will automatically insert the HTML for you, whereas text will allow you to insert your own HTML tags. If in doubt, select Visual.
                The buttons at the top of this text box allow you to format the content of the page.
            </li>
            <li>
                Custom fields - the site is pre-configured to allow you to change the header image on each page using custom fields. However, you can skip this step if you just want the page to have the default header image.
                If you cannot see this Custom Fields section, at the top of the page, click <i>Screen options</i> and tick the Custom Fields option.
                In the custom fields box, click <i>Enter new</i>. In the name box, enter <i>header_number</i>, and in the value box, enter a number between 1 and 7. This will select the corresponding header
                image for the new page.
            </li>
            <li>
                Preview - you can use the <i>Preview</i> button on the right hand side to preview what your page looks like.
            </li>
            <li>Publish - Once you are happy with the page, click the blue <i>Publish</i> button on the right hand side to create your page. You can also use the <i>Save draft</i> button to save the page, however, it will not be visible on the site until you publish it.</li>
            <li>
                Add to the menu - If you want to add your page to the site's navigation, then either <a href="/wp-admin/nav-menus.php">click here</a> or, using the left hand navigation, go to Appearance > Menus.
                Under the Menu Structure title, you should be able to see the current structure of the site's navigation. Find your new page using the Page box on the left, select the tick box next to it and click <i>Add to menu</i>.
                This will add the page to the bottom of the navigation list. Now you can drag it to wherever you want it appear in the navigation.
            </li>
        </ol>
        
        <h2>Edit an existing page</h2>
        <p>
            To edit an existing page, either <a href="/wp-admin/edit.php?post_type=page">click here</a>, or, using the left hand side navigation, go to Pages > All Pages.
            Find the page you want to edit in the list (you can search for it using the search bar on the right if you want to) and click the page. This will take you to a page where you can edit the page's content.
            Once you've finished updating the page, click the blue <i>Update</i> button on the right to save your changes.
        </p>
        
        <h2>Add a news article</h2>
        <p>
            To add a news article, either <a href="/wp-admin/post-new.php">click here</a>, or, using the left hand side navigation, go to Posts > Add new.
            The first 3 steps are the same as <i>Add a new page</i>. However, after that you need to do the following:
        </p>
        <ol start="4" style="padding-left:30px;">
            <li>
                Excerpt - this should be a short paragraph that summarises the news article. It gets displayed on the page with the <a href="/category/news/">list of news articles</a>.
                If you can't see this option, click <i>Screen options</i> at the top of the page, and select the Excerpt tick box.
            </li>
            <li>
                Categories - make sure you select News in the categories box on the right. If this isn't selected then it won't display on the news page.
            </li>
            <li>
                Discussion - make sure the <i>Allow comments</i> tick box is NOT checked in the discussion box at the bottom of the page.
            </li>
        </ol>
        
        <h2>Edit an existing news article</h2>
        <p>
            To edit an existing news article, either <a href="/wp-admin/edit.php">click here</a>, or, using the left hand side navigation, go to Posts > All Posts.
            Find the news article you want to edit in the list (you can search for it using the search bar on the right if you want to, or select News in the categories dropdown to just see News articles) and click the article you want to edit. This will take you to a page where you can edit the article's content.
            Once you've finished updating the article, click the blue <i>Update</i> button on the right to save your changes.
        </p>
        
        <h2> Add a new event</h2>
        <p>
            There are 2 parts to adding a new event. First you need to edit the events page. Follow the instructions in <i>Edit an existing page</i> to do this,
            making sure you edit the Events page.<br/><br/>
            If you want, you can leave it there or if you want to display more information for the event, you can create a new page on the website just for the event.
            To do this, follow these instructions:
        </p>
        <ol style="padding-left:30px;">
            <li>Create a post as detailed in <i>Add a news article</i>, however, make sure you select <b>Events</b> instead of News in step 5 (you also don't need to bother with the Excerpt box)</li>
            <li>
                Custom fields - to add date, time and location icons to the right of the page, you need add custom fields (go to <i>Screen Options</i> and select <i>Custom Fields</i> if you can't see the custom fields box).
                You now need to add 3 custom fields, with the following names <b>date</b>, <b>time</b> and <b>location</b>. Then insert the correct information in the value box.
            </li>
            <li>
                If you want to embed google maps to this page, go to <a href="https://google.com/maps">https://google.com/maps</a> and find the location you want to display. Once your happy with the location, click the top left menu button and select <i>Share or embed map</i>.
                When the popup appears, select the <i>Embed map</i> tab. Copy and paste the HTML code (the bit that starts with &lt;iframe&gt;) into your event.
            </li>
            <li>
                Finally you need to link the Events page to this new page. Go to edit the events page again and select the text you want people to be able to click to go to this new page.
                Once you've selected the text, click the <i>Insert/edit link</i> button (it looks a bit like a paperclip). A search box should appear - search for the event in this box and select it once found.
                Now just click the update button to save the page.
            </li><br/>
        </ol>
        
        <h2> Edit an existing event</h2>
        <p>
            Editing an existing event is the same as <i>Edit an existing page</i> to edit the Events page and the same as <i>Edit an existing news article</i> to edit the individual event's page (if it has one).
        </p>
        
        <h2>Add images to the gallery</h2>
        <p>
            Still need to write this...
        </p>
        
        <h2>Edit the contact form settings</h2>
        <p>
            To update the contact form, or update the contact form settings (i.e. who gets emailed with the query), either <a href="/wp-admin/admin.php?page=wpcf7">click here</a>
            or, using the left hand navigation, go to <i>Contact</i>. On the next page, click Contact Us (this should be the only option in the table). There are now 4 tabs that allow you to update the settings
        </p>
        <ol style="padding-left:30px;">
            <li><b>Form</b> - This allows you to change the contact form fields.</li>
            <li><b>Mail</b> - Here you can change who gets emailed with the query and what that email looks like.</li>
            <li><b>Messages</b> - This allows you to change the mesages a person sees when they submit the conact form.</li>
            <li><b>Additional Settings</b> - I would advise you to leave this blank.</li>
        </ol>
        <p>
            You can use the information box on the right if you need any more help with the contact form. 
        </p>
        <h2>Create a new admin account</h2>
        <p>
            If you want to add a new user account to allow someone new to edit the site, either <a href="/wp-admin/user-new.php">click here</a> or, using the left hand navigation, go to Users > Add New.
            Fill out the form with the new user's details, and for role, I would advise selecting one of the following:
        </p>
        <ul style="list-style: disc; padding-left:30px;">
            <li><b>Editor</b> - gives access to manage content (i.e. pages, posts) but cannot edit the site's settings.</li>
            <li><b>Administrator</b> - gives access to all the administration features within the site.</li>
        </ul>
        
        <h2>Technical stuff</h2>
        <h4>Wordpress</h4>
        <p>
            The site is built using Wordpress (<a href="https://wordpress.com/">https://wordpress.com</a>), and is currently on version <?php echo get_bloginfo('version');?>.
            <a href="/wp-admin/update-core.php">This page</a> will check whether a new version of Wordpress is available, and if so, will allow you to update - just follow the
            instructions on the page.
        </p>
        <p>
            The wordpress theme used on this site is Cannyon theme. More information on this theme can be found here <a href="http://mythem.es/item/cannyon-premium-multipurpose-wordpress-theme/">http://mythem.es/item/cannyon-premium-multipurpose-wordpress-theme</a>.
            It is currently on the free version of Cannyon, but the premium version can be bought using the previous link.    
        </p>
        <p>The following Wordpress plugins are used on the site:</p>
        <ul style="list-style: disc; padding-left:30px;">
            <li><b>Contact form 7</b> (<a href="https://en-gb.wordpress.org/plugins/contact-form-7/">https://en-gb.wordpress.org/plugins/contact-form-7</a>) - used for the contact us page. See <i>Edit the contact form settings</i> for instructions on how to change the contact form.</li>
            <li><b>Nextgen Gallery</b> (<a href="https://en-gb.wordpress.org/plugins/nextgen-gallery/">https://en-gb.wordpress.org/plugins/nextgen-gallery</a>) - used for the gallery page. For information on how to use this plugin please see the <i>Add images to the gallery</i> section above.</li>
            <li><b>Eagley plugin</b> - this was created by me and contains all custom functionality for this site. This should not need to be changed.</li>
        </ul>
        <p>Plugins can be managed and updated from <a href="">here</a></p>

        <h4>Domain name</h4>
        <p>
            The domain name is held by Chris Chadwick (<a href="mailto:chris@thebinarybox.co.uk">chris@thebinarybox.co.uk</a>).
            It was last renewed on the 26/06/2017 and will expire on the 25/06/2022.
        </p>
        <h4>Hosting</h4>
        <p>
            The site is hosted (for free) by Matthew Haworth. Speak to me if there is any issue with hosting and I can get in touch with him.
        </p>
            
    </div>
<?php
}
?>
