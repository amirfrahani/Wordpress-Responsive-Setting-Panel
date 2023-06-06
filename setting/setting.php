<div class="wiki_setting_container">
    <div class="wiki_responsive_menu" id="wiki_responsive_menu">
        <svg version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve"><style type="text/css">.st0{fill: #000000;}</style><g><rect y="16" class="st0" width="512" height="96"/><rect y="208" class="st0" width="512" height="96"/><rect y="400" class="st0" width="512" height="96"/></g></svg>
    </div>
    <div class="wiki_setting_wrapper">

        <div class="wiki_setting_nav wiki_responsive_hidden">
            <div class="remove_wiki_responsive_menu">
                <svg viewBox="0 0 1024 1024" fill="#000000" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M512 897.6c-108 0-209.6-42.4-285.6-118.4-76-76-118.4-177.6-118.4-285.6 0-108 42.4-209.6 118.4-285.6 76-76 177.6-118.4 285.6-118.4 108 0 209.6 42.4 285.6 118.4 157.6 157.6 157.6 413.6 0 571.2-76 76-177.6 118.4-285.6 118.4z m0-760c-95.2 0-184.8 36.8-252 104-67.2 67.2-104 156.8-104 252s36.8 184.8 104 252c67.2 67.2 156.8 104 252 104 95.2 0 184.8-36.8 252-104 139.2-139.2 139.2-364.8 0-504-67.2-67.2-156.8-104-252-104z" fill="" /><path d="M707.872 329.392L348.096 689.16l-31.68-31.68 359.776-359.768z" fill="" /><path d="M328 340.8l32-31.2 348 348-32 32z" fill="" /></svg>
            </div>
            <div class="wiki_setting_nav_section">
                <div class="wiki_setting_plugin_icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/setting/image/IMG_20230530_115647_339.jpg" alt="">
                </div>
                <div class="wiki_setting_plugin_title">
                    <h3>Wiki Setting </h3>
                </div>
            </div>
            <nav class="wiki_navbar_menu">
                <ul>
                    <li><a href="#">General</a></li>
                    <li ><a href="<?php menu_page_url('theme_setting'); ?>">Tracking Code</a></li>
                    <li class="wiki_active_nav"><a href="<?php menu_page_url('plugin_setting'); ?>">Plugin Setting</a></li>
                    <li><a href="#">Export / Import</a></li>
                </ul>
            </nav>
            <div class="wiki_setting_nav_section">
                <span class="wiki_plugin_version">Version 1</span>
            </div>
        </div>

        <div class="wiki_setting_content">
            <div class="wiki_content_title">
                <div class="wiki_content_title_right">
                    <h3 class="wiki_content_title_h3">Plugin Setting</h3>
                </div>
                <div class="wiki_content_title_left">
                    <a class="wiki_content_count" href="#">
                        83 Tracking Code
                    </a>
                </div>
            </div>
            <form action="" class="wiki_form">
                <div class="wiki_form_content">
                    <div class="wiki_input_group">
                        <div class="wiki_input_group_title">
                            <h4>Plugin header</h4>
                        </div>
                        <select name="" id="" class="wiki_input_select">
                            <option value="state_1">Header 1</option>
                            <option value="state_2">Header 2</option>
                            <option value="state_3">Header 3</option>
                            <option value="state_4">Header 4</option>
                        </select>
                    </div>
                    <div class="wiki_input_group">
                        <div class="wiki_input_group_title">
                            <h4>Authenticate Code</h4>
                        </div>
                        <div class="wiki_input_group_inputs">
                            <input type="text" class="wiki_input wiki_input_without_icon" placeholder="Please Enter the Authenticate Code">
                        </div>
                    </div>
                    <div class="wiki_input_group">
                        <div class="wiki_input_group_title">
                            <h4>User password</h4>
                        </div>
                        <div class="wiki_input_group_inputs">
                            <textarea class="wiki_textarea" placeholder="Please enter the user password" cols="15" rows="10"></textarea>
                        </div>
                    </div>

                    <div class="wiki_input_group">
                        <div class="wiki_input_group_title">
                            <h4>Plugin Color</h4>
                        </div>
                        <input type="color" value="#43da86" class="wiki_input_color" />
                    </div>
                    <div class="wiki_separator"></div>
                    <div class="wiki_input_group">
                        <div class="wiki_input_group_title">
                            <h4>Header Color</h4>
                        </div>
                        <input type="color" value="#0000" class="wiki_input_color" />
                    </div>

                </div>
                <div class="wiki_submit_btn">
                    <input type="submit" value="Save Changes" class="wiki_submit_form">
                </div>
            </form>
        </div>
    </div>
</div>
