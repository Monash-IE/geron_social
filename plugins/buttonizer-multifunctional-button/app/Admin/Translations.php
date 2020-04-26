<?php
/**
 * Buttonizer translations
 */
namespace Buttonizer\Admin;

class Translations {
    public function get() {
        return [
            'errors' => $this->errors(),
            'warnings' => $this->warnings(),
            'common' => $this->common(),
            'loading' => $this->loading(),
            'utils' => $this->utils(),
            'event_tracker' => $this->eventTracker(),
            'modal' => $this->modal(),
            'saving' => $this->saving(),
            'revert' => $this->reverting(),
            'welcome' => $this->welcome(),
            'settings' => $this->settings(),
            'settings_window' => $this->settingsWindow(),
            'bar' => $this->bar(),
            'migration_modal' => $this->migration(),
            'premium' => $this->premium(),
            'page_rules' => $this->page_rules(),
            'time_schedules' => $this->time_schedules()
        ];
    }

    /**
     * Errors
     *
     * @return array
     */
    private function errors() {
        return [
            'fatal' => __('Oh, that was not what we were expecting! Something went wrong.', 'buttonizer-multifunctional-button'),

            // Custom javascript error
            'custom_javascript' => [
                'title' => __('Custom javascript error', 'buttonizer-multifunctional-button'),
                'message' => __('Your custom javascript ran into an error. Read the error below:', 'buttonizer-multifunctional-button')
            ],

            // Saving error
            'saving' => [
                'title' => __('Could not save settings', 'buttonizer-multifunctional-button'),
                'message' => __('Something went wrong while saving your settings:', 'buttonizer-multifunctional-button')
            ],

            // Forms
            'forms' => [
                'only_numbers' => __('Only numbers allowed.', 'buttonizer-multifunctional-button'),
                'only_numbers_info' => __('For this input, only positive numbers are allowed.', 'buttonizer-multifunctional-button'),
            ]
        ];
    }

    /**
     * Warnings
     *
     * @return array
     */
    private function warnings() {
        return [
            'invalid_email' => __('Invalid email address.', 'buttonizer-multifunctional-button'),
            'invalid_phone_number' => __('Invalid phone number. Please only use number for your phone number. Omit any zeros, brackets or dashes when adding the phone number in international format.', 'buttonizer-multifunctional-button'),
            'only_numbers' => __('This field only allows numbers.', 'buttonizer-multifunctional-button'),

        ];
    }

    /**
     * Common
     *
     * @return array
     */
    private function common() {
        return [
            'button' => __('Button', 'buttonizer-multifunctional-button'),
            'group' => __('Group', 'buttonizer-multifunctional-button'),

            'settings' => __('Settings', 'buttonizer-multifunctional-button'),

            'custom' => __('Custom', 'buttonizer-multifunctional-button'),

            'confirm' => __('Confirm', 'buttonizer-multifunctional-button'),
            'search' => __('Search', 'buttonizer-multifunctional-button'),

            'skip' => __('Skip', 'buttonizer-multifunctional-button'),

            // Disabled
            'disable' => __('Disable', 'buttonizer-multifunctional-button'),
            'disabled' => __('Disabled', 'buttonizer-multifunctional-button'),

            // Save & publish
            'save' => __('Save', 'buttonizer-multifunctional-button'),
            'saving' => __('Saving', 'buttonizer-multifunctional-button'),
            'saving_settings' => __('Saving settings', 'buttonizer-multifunctional-button'),

            'publish' => __('Publish', 'buttonizer-multifunctional-button'),
            'published' => __('Published', 'buttonizer-multifunctional-button'),
            'publishing' => __('Publishing...', 'buttonizer-multifunctional-button'),

            // Warning
            'warning' => __('Warning', 'buttonizer-multifunctional-button'),

            'next' => __('Next', 'buttonizer-multifunctional-button'),
            'previous' => __('Previous', 'buttonizer-multifunctional-button'),

            // translators: The button to save and publish the changes that were made
            'save_publish' => __('Save & publish', 'buttonizer-multifunctional-button')
        ];
    }

    /**
     * Loading
     *
     * @return array
     */
    private function loading() {
        return [
            'loading' => __('Loading...', 'buttonizer-multifunctional-button'),
            'settings' => __('Loading settings...', 'buttonizer-multifunctional-button'),
            'bar' => __('Building bar...', 'buttonizer-multifunctional-button'),
            'website' => __('Waiting for your website...', 'buttonizer-multifunctional-button'),
            'website_slow' => __('It\'s taking longer than usual, slow website?', 'buttonizer-multifunctional-button'),
            'website_skip' => __('Skip this step', 'buttonizer-multifunctional-button'),
            'initializing' => __('Initializing...', 'buttonizer-multifunctional-button'),
            'resetting' => __('Resetting...', 'buttonizer-multifunctional-button'),
            'running_migration' => __('Running migration...', 'buttonizer-multifunctional-button'),
            // translators: Finishing as in 'Cleaning up files'
            'finishing' => __('Finishing...', 'buttonizer-multifunctional-button')
        ];
    }

    /**
     * Utils
     *
     * @return array
     */
    private function utils() {
        return [
            'add_button' => __('Add button', 'buttonizer-multifunctional-button'),
            'add_group' => __('Add group', 'buttonizer-multifunctional-button'),

            // New button and new group
            'new_button' => __('New button', 'buttonizer-multifunctional-button'),
            'new_group' => __('New group', 'buttonizer-multifunctional-button'),

            // Advanced button/group settings
            'advanced_settings' => __('Advanced settings', 'buttonizer-multifunctional-button'),

            'text' => __('Text', 'buttonizer-multifunctional-button'),
            // translators: Base is meant as default state of the button (not hovering or clicking)
            'base' => __('Base', 'buttonizer-multifunctional-button'),
            'icon' => __('Icon', 'buttonizer-multifunctional-button'),
            'search_icon' => __('Search icon', 'buttonizer-multifunctional-button'),

            // Image strings
            'image' => __('Image', 'buttonizer-multifunctional-button'),
            'select_image' => __('Select image', 'buttonizer-multifunctional-button'),
            'change_image' => __('Change image', 'buttonizer-multifunctional-button'),
            'select_file' => __('Select file', 'buttonizer-multifunctional-button'),
            'change_file' => __('Change file', 'buttonizer-multifunctional-button'),
            'remove_image' => __('Click to remove this image', 'buttonizer-multifunctional-button'),

            // First and second button
            'first_button' => __('First button', 'buttonizer-multifunctional-button'),
            'second_button' => __('Second button', 'buttonizer-multifunctional-button'),

            // Rename
            'rename' => __('Rename', 'buttonizer-multifunctional-button'),

            // Delete
            'delete' => __('Delete', 'buttonizer-multifunctional-button'),

            // Duplicate
            'duplicate' => __('Duplicate', 'buttonizer-multifunctional-button'),

            // translators: This string will be used to replace %s in 'Are you very sure you want to remove this %s?'
            'lowercase_page_rule' => __('page rule', 'buttonizer-multifunctional-button'),
            // translators: This string will be used to replace %s in 'Are you very sure you want to remove this %s?'
            'lowercase_time_schedule' => __('time schedule', 'buttonizer-multifunctional-button'),

            // translators: Interaction is meant as hover/click state
            'interaction' => __('Interaction', 'buttonizer-multifunctional-button'),

            // translators: Background as in background color
            'background' => __('Background', 'buttonizer-multifunctional-button'),

            // Tips & tricks
            'tips_tricks' => __('Need help? Quick-start, tips & tricks', 'buttonizer-multifunctional-button'),
            'visit_knowledgebase' => __('Need help? Visit our knowledge base!', 'buttonizer-multifunctional-button'),

            'search_not_found' => __('Nothing found for:', 'buttonizer-multifunctional-button'),
            'search_icons' => __('Search icons', 'buttonizer-multifunctional-button'),

            'knowledge_link' => sprintf(
            // translators: %1$s will be replaced with a action name, %2$s will be replaced with a link
                __('Need help? Learn how to use <b>%1$s</b>.', 'buttonizer-multifunctional-button'),
                '{0}', 'href="{1}" target="_blank"'
            ),
        ];
    }

    /**
     * Modal/dialog
     *
     * @return array
     */
    private function modal() {
        return [
            'ok' => __('OK', 'buttonizer-multifunctional-button'),
            'ok_fix' => __('OK, I\'ll fix this', 'buttonizer-multifunctional-button'),

            'close' => __('Close', 'buttonizer-multifunctional-button'),
            'cancel' => __('Cancel', 'buttonizer-multifunctional-button'),

            // Yes/No
            'yes_please' => __('Yes please', 'buttonizer-multifunctional-button'),
            'no_thanks' => __('No thank you', 'buttonizer-multifunctional-button'),

            // Dismiss
            'dismiss' => __('Dismiss', 'buttonizer-multifunctional-button'),
            'changed_my_mind' => __('I\'ve changed my mind', 'buttonizer-multifunctional-button'),

            // Save
            'save' => __('Save', 'buttonizer-multifunctional-button'),

            'remove_schedule_or_rule' => [
                // translators: %s will be replaced with 'time schedule / page rule'
                'title' => sprintf(
                    __('Remove %s?', 'buttonizer-multifunctional-button'), '{0}'
                ),

                'question' => sprintf(
                    // translators: %s will be replaced with 'time schedule / page rule'
                    __('Are you very sure you want to remove this %1$s? Buttons that are still attached to this %2$s will become visible unless you attach them to another %3$s or hide them.', 'buttonizer-multifunctional-button'),
                    '{0}', '{0}', '{0}'
                ),
                'no_buttons' => sprintf(
                    // translators: %s will be replaced with 'time schedule / page rule'
                    __('There are no buttons attached to this %s. You can remove this safely.', 'buttonizer-multifunctional-button'),
                    '{0}'
                ),
                'num_buttons_multiple' => sprintf(
                    // translators: This sentence will be used to remove a 'time schedule/page rule' and there are multiple buttons attached to it. %1$s will be a number, %2$s will be the 'time schedule / page rule'
                    __('There are <b>%1$s</b> buttons attached to this %2$s!', 'buttonizer-multifunctional-button'),
                    '{0}', '{1}'
                ),
                'num_buttons_single' => sprintf(
                    // translators: This sentence will be used to remove a time schedule and there is only one button attached to it
                    __('There is <b>1</b> button attached to this %s!', 'buttonizer-multifunctional-button'),
                    '{0}'
                ),
                'last_warning' => sprintf(
                    // translators: %s will be replaced with 'time schedule / page rule'
                    __('Do you want to remove this %s?', 'buttonizer-multifunctional-button'),
                    '{0}'
                ),
            ],
        ];
    }

    /**
     * Event tracker
     *
     * @return array
     */
    private function eventTracker() {
        return [
            'title' => __('Event tracker', 'buttonizer-multifunctional-button'),
            'window_title' => __('Event tracker (experimental)', 'buttonizer-multifunctional-button'),
        ];
    }

    /**
     * Saving changes
     *
     * @return array
     */
    private function saving() {
        return [
            'saving' => 'Saving changes...',
            'completed' => 'Saving complete.'
        ];
    }

    /**
     * Reverting
     *
     * @return array
     */
    private function reverting() {
        return [
            'revert_changes' => __('Revert changes', 'buttonizer-multifunctional-button'),
            'reverting' => __('Reverting...', 'buttonizer-multifunctional-button'),
            'modal' => [
                'intro' => __('Are you sure you want to revert your changes?', 'buttonizer-multifunctional-button'),
                'action' => __('The current changes will be overwritten by the current published buttons and settings.', 'buttonizer-multifunctional-button')
            ],
            'error' => [
                'title' => __('Could not revert settings', 'buttonizer-multifunctional-button'),
                'message' => __('Something went wrong while reverting your settings.', 'buttonizer-multifunctional-button')
            ]
        ];
    }

    /**
     * Group and button settings
     *
     * @return array
     */
    private function settings() {
        return [
            'settings' => __('Settings', 'buttonizer-multifunctional-button'),

            // Setting categories
            'setting_categories' => [
                'menu_style' => __('Menu style', 'buttonizer-multifunctional-button'),
                'group_style' => __('Group style', 'buttonizer-multifunctional-button'),
                'group_icon' => __('Group icon', 'buttonizer-multifunctional-button'),
                'button_style' => __('Button style', 'buttonizer-multifunctional-button'),
                'button_icon' => __('Button icon', 'buttonizer-multifunctional-button'),
                'label' => __('Label', 'buttonizer-multifunctional-button'),
            ],

            'name' => [
                'title' => __('Button name', 'buttonizer-multifunctional-button'),
                'description' => __('This is the button name.', 'buttonizer-multifunctional-button'),
            ],

            'background_color' => [
                'title' => __('Button color', 'buttonizer-multifunctional-button'),
                'description' => __('This is the color of your button group and also the default color for your buttons within this group.', 'buttonizer-multifunctional-button'),
            ],
            'background_image' => [
                'title' => __('Background image', 'buttonizer-multifunctional-button'),
                'description' => __('Upload an image if you want an image as a background instead of a color. Recommended aspect ratio: square (1:1).', 'buttonizer-multifunctional-button'),
            ],
            'border_radius' => [
                'title' => __('Border radius', 'buttonizer-multifunctional-button'),
                'description' => __('Change the roundness of this button group.', 'buttonizer-multifunctional-button'),
            ],
            'icon' => [
                'title' => __('Icon', 'buttonizer-multifunctional-button'),
                'description' => __('Choose an icon from the icon library.', 'buttonizer-multifunctional-button'),
            ],
            'icon_color' => [
                'title' => __('Icon color', 'buttonizer-multifunctional-button'),
                'description' => __('Change the icon color of this button.', 'buttonizer-multifunctional-button'),
            ],
            'icon_image_border_radius' => [
                'title' => __('Border radius', 'buttonizer-multifunctional-button'),
                'description' => __('Change the border radius of the image.', 'buttonizer-multifunctional-button'),
            ],
            'icon_image_select' => [
                'title' => __('Icon', 'buttonizer-multifunctional-button'),
                'description' => __('Choose an image to use as this button or group icon. Recommended aspect ratio: square (1:1)', 'buttonizer-multifunctional-button'),
            ],
            'icon_image_size' => [
                'title' => __('Image size', 'buttonizer-multifunctional-button'),
                'description' => __('Change the size of the image.', 'buttonizer-multifunctional-button'),
            ],
            'icon_or_image' => [
                'title' => __('Graphic', 'buttonizer-multifunctional-button'),
                'description' => __('Choose whether to use an icon or image as the button icon.', 'buttonizer-multifunctional-button'),
            ],
            'icon_size' => [
                'title' => __('Icon size', 'buttonizer-multifunctional-button'),
                'description' => __('Change the icon size of this button.', 'buttonizer-multifunctional-button'),
            ],
            'label' => [
                'title' => __('Label', 'buttonizer-multifunctional-button'),
                'description' => __('Change the label of this button.', 'buttonizer-multifunctional-button'),
                'placeholder' => __('Label text', 'buttonizer-multifunctional-button'),
            ],
            'label_color' => [
                'title' => __('Label color', 'buttonizer-multifunctional-button'),
                'description' => __('Change the text and background color of the label for this button or group.', 'buttonizer-multifunctional-button'),
            ],
            'font_size_border_radius' => [
                'title' => __('Font size & border radius', 'buttonizer-multifunctional-button'),
                'description' => __('Change the font size and border radius of the label for this button group.', 'buttonizer-multifunctional-button'),
            ],
            'menu_animation' => [
                'title' => __('Animation', 'buttonizer-multifunctional-button'),
                'description' => __('This will animate this button group to get the attention of the visitor. The animation repeats itself every 10 seconds.', 'buttonizer-multifunctional-button'),
                'animations' => [
                    'none' => __('No animation', 'buttonizer-multifunctional-button'),
                    'hello' => __('Buttonizer Hello', 'buttonizer-multifunctional-button'),
                    'bounce' => __('Bounce', 'buttonizer-multifunctional-button'),
                    'jelly' => __('Jelly', 'buttonizer-multifunctional-button'),
                    'pulse' => __('Pulse', 'buttonizer-multifunctional-button'),
                ]
            ],
            'menu_position' => [
                'title' => __('Position', 'buttonizer-multifunctional-button'),
                'description' => __('Change the position of this button group.', 'buttonizer-multifunctional-button'),

                'positions' => [
                    'bottomright' => __('Bottom right', 'buttonizer-multifunctional-button'),
                    'bottomleft' => __('Bottom left', 'buttonizer-multifunctional-button'),
                    'topright' => __('Top right', 'buttonizer-multifunctional-button'),
                    'topleft' => __('Top left', 'buttonizer-multifunctional-button'),
                    'advanced' => __('Custom', 'buttonizer-multifunctional-button'),
                ]
            ],
            'menu_style' => [
                'title' => __('Menu Style', 'buttonizer-multifunctional-button'),
                'description' => __('Change the menu style of this button group.', 'buttonizer-multifunctional-button'),

                'styles' => [
                    'default' => __('Default', 'buttonizer-multifunctional-button'),
                    'faded' => __('Faded', 'buttonizer-multifunctional-button'),
                    'cornercircle' => __('Corner circle', 'buttonizer-multifunctional-button'),
                    'buildingup' => __('Build Up', 'buttonizer-multifunctional-button'),
                    'pop' => __('Pop', 'buttonizer-multifunctional-button'),
                    'square' => __('Square', 'buttonizer-multifunctional-button'),
                    'rectangle' => __('Rectangle', 'buttonizer-multifunctional-button'),
                ]
            ],
            'label_desktop' => [
                'title' => __('Visibility', 'buttonizer-multifunctional-button'),
                'description' => __('Always show the label, show the label on hover or hide the label on <u>desktop devices</u>.', 'buttonizer-multifunctional-button'),
            ],
            'label_mobile' => [
                'title' => __('Visibility', 'buttonizer-multifunctional-button'),
                'description' => __('Always show or hide the label on <u>mobile devices</u>.', 'buttonizer-multifunctional-button'),
            ],
            'label_styles' => [
                'always' => __('Always show label', 'buttonizer-multifunctional-button'),
                'hover' => __('Show label on hover', 'buttonizer-multifunctional-button'),
                'hide' => __('Hide label', 'buttonizer-multifunctional-button')
            ],
            'show_mobile_desktop' => [
                'title' => __('Show on', 'buttonizer-multifunctional-button'),
                'device_visibility' => __('Device visibility', 'buttonizer-multifunctional-button'),
                'description' => __('Choose if you want to make this button group visible on desktop and mobile devices.', 'buttonizer-multifunctional-button'),
                'mobile' => __('Mobile', 'buttonizer-multifunctional-button'),
                'desktop' => __('Desktop', 'buttonizer-multifunctional-button'),
            ],
            'start_opened' => [
                'title' => __('Start opened', 'buttonizer-multifunctional-button'),
                'description' => __('This button group starts opened when this setting is enabled.', 'buttonizer-multifunctional-button'),
            ],
            'use_main_button_style' => [
                'title' => __('Use the same style of main button', 'buttonizer-multifunctional-button'),
                'description' => __('When enabled, this button will use the same style as the button group.', 'buttonizer-multifunctional-button'),
            ],
            'custom_id' => [
                // translators: 'id' as in HTML attribute 'id'
                'title' => __('Custom ID', 'buttonizer-multifunctional-button'),
                // translators: 'id' as in HTML attribute 'id'
                'description' => __('Adds a custom \'id\' HTML attribute to the button.', 'buttonizer-multifunctional-button'),
                // translators: 'id' as in HTML attribute 'id'
                'pro_description' => __('You can add a custom ID to each button for styling purposes.', 'buttonizer-multifunctional-button'),
                // translators: 'id' as in HTML attribute 'id'
                'placeholder' => __('ID name', 'buttonizer-multifunctional-button'),
            ],
            'custom_class' => [
                // translators: 'class' as in HTML attribute 'class'
                'title' => __('Custom class', 'buttonizer-multifunctional-button'),
                // translators: 'class' as in HTML attribute 'class'
                'description' => __('Adds a custom \'class\' HTML attribute to the button.', 'buttonizer-multifunctional-button'),
                // translators: 'class' as in HTML attribute 'class'
                'pro_description' => __('You can add a custom class to each button for styling purposes.', 'buttonizer-multifunctional-button'),
                // translators: 'class' as in HTML attribute 'class'
                'placeholder' => __('Class name', 'buttonizer-multifunctional-button'),
            ],
            'selected_page_rule' => [
                'title' => __('Page rule', 'buttonizer-multifunctional-button'),
                'description' => __('Adds a custom \'class\' HTML attribute to the button.', 'buttonizer-multifunctional-button'),
                'pro_description' => __('You can add a custom class to each button for styling purposes.', 'buttonizer-multifunctional-button'),
                'manage_page_rules' => __('Manage page rules', 'buttonizer-multifunctional-button'),
                'cannot_select' => __('You cannot select the same page rule as it\'s group!', 'buttonizer-multifunctional-button'),

                'show_on_rule_trigger' => [
                    'show' => __('Show button when rule is triggered', 'buttonizer-multifunctional-button'),
                    'hide' => __('Hide button when rule is triggered', 'buttonizer-multifunctional-button'),
                ]
            ],

            'exit_intent' => [
                'title' => __('Exit intent', 'buttonizer-multifunctional-button'),
                'enable' => __('Enable exit intent', 'buttonizer-multifunctional-button'),
                'pro_description' => __('With this setting, you can trigger Buttonizer to animate before your guest exits your website.', 'buttonizer-multifunctional-button'),
                'info' => __('Please note: Exit intent will <b>not trigger</b> in preview mode, only in your LIVE website.', 'buttonizer-multifunctional-button'),

                'when_to_trigger' => __('When to trigger?', 'buttonizer-multifunctional-button'),
                'trigger_window' => __('Trigger when leaving browser window', 'buttonizer-multifunctional-button'),
                'trigger_inactive' => __('Trigger on inactivity (2 minutes)', 'buttonizer-multifunctional-button'),

                'how_often' => [
                    '_title' => __('How often should it be triggered?', 'buttonizer-multifunctional-button'),
                    'once_page' => __('Only trigger once per page', 'buttonizer-multifunctional-button'),
                    'once_session' => __('Only trigger once per session', 'buttonizer-multifunctional-button'),
                    'always' => __('Trigger every time', 'buttonizer-multifunctional-button'),
                ],

                'animation' => [
                    '_title' => __('Animation on intent', 'buttonizer-multifunctional-button'),
                    'focused' => __('Focused', 'buttonizer-multifunctional-button'),
                    'open_menu' => __('Open menu', 'buttonizer-multifunctional-button'),
                    'jump' => __('Jump once and open', 'buttonizer-multifunctional-button'),
                    'flip' => __('Flip and open', 'buttonizer-multifunctional-button'),
                ]
            ],

            'button_action' => [
                'title' => __('Button action', 'buttonizer-multifunctional-button'),
                'description' => __('Choose a click action for this button.', 'buttonizer-multifunctional-button'),
                'select' => __('Select button action', 'buttonizer-multifunctional-button'),
                'search_not_found' => __('No button action found for:', 'buttonizer-multifunctional-button'),

                'actions' => [
                    'group_popular' => __('Popular actions', 'buttonizer-multifunctional-button'),
                    'group_chat' => __('Click to chat', 'buttonizer-multifunctional-button'),
                    'group_social_media' => __('Social Media', 'buttonizer-multifunctional-button'),
                    'group_popup' => __('Popup', 'buttonizer-multifunctional-button'),

                    'phone_number' => __('Call action (phone number)', 'buttonizer-multifunctional-button'),
                    'mail' => __('Mail action (email address)', 'buttonizer-multifunctional-button'),
                    'back_to_top' => __('Back to top', 'buttonizer-multifunctional-button'),
                    'go_back_one_page' => __('Go back one page', 'buttonizer-multifunctional-button'),
                    'share_page' => __('Share page', 'buttonizer-multifunctional-button'),
                    'sms' => __('Some sms apps does not support a body tag. When this happens, it will simply open the sms app with the phone number already filled in.', 'buttonizer-multifunctional-button'),
                    'viber' => __('Viber does not support a "chat with phone number " link. When a user clicks on this button it will open their "add contact" with the number filled in.', 'buttonizer-multifunctional-button'),
                    'messenger_chat' => sprintf(
                        // translators: %s and %s will be replaced with links
                        __('New, Facebook Messenger Chat Widget! First, you\'ll need to <a %1$s>whitelist</a> your site on Facebook. Then add your <a %2$s>Page ID</a> into the input above.', 'buttonizer-multifunctional-button'),
                        'href="https://developers.facebook.com/docs/messenger-platform/reference/messenger-profile-api/domain-whitelisting#page_settings" target="_blank"', 'href="https://www.facebook.com/help/1503421039731588" target="_blank"'
                    ),
                    'poptin' => sprintf(
                        // translators: %s and %s will be replaced with links
                        __('You need to install Poptin\'s WordPress plugin. You can find it <a %1$s>here</a>. Once you\'ve made a Poptin paste the <a %2$s>direct link</a> into the input.', 'buttonizer-multifunctional-button'),
                        'href="https://wordpress.org/plugins/poptin/" target="_blank"', 'href="https://help.poptin.com/article/show/72942-how-to-show-a-poptin-when-the-visitor-clicks-on-a-button-link-on-your-site" target="_blank"'
                    ),
                    'share_page_on' => sprintf(
                        // translators: %s will become the social media platform, like example: Share on Twitter
                        __('Share on %s', 'buttonizer-multifunctional-button'),
                        '{0}'
                    ),

                    'share_page_via' => sprintf(
                        // translators: %s will become the social media platform, like example: Share via email
                        __('Share via %s', 'buttonizer-multifunctional-button'),
                        '{0}'
                    ),

                    'url' => [
                        'invalid' => __('This URL appears to be invalid. The button may not work as expected.', 'buttonizer-multifunctional-button'),
                        'invalid_tip' => __('Do you miss <b>http://</b> or <b>https://</b>? Perhaps an unnecessary space is added somewhere.', 'buttonizer-multifunctional-button'),
                        'insecure' => __('<b>Insecure URL:</b> Sorry to interrupt, but we advice you to use HTTPS for your URLS. This is a safer way to transport data.', 'buttonizer-multifunctional-button'),
                    ],

                    'javascript' => [
                        'name' => __('Javascript function', 'buttonizer-multifunctional-button'),
                        'warning_modal_title' => __('Warning! Before you continue...', 'buttonizer-multifunctional-button'),
                        'warning_intro' => __('You are changing this button action from custom javascript to a different action. Your javascript changes will be lost.', 'buttonizer-multifunctional-button'),
                        'warning_question' => __('Are you sure you want to proceed?', 'buttonizer-multifunctional-button'),
                    ],

                    'whatsapp_info' => sprintf(
                        // translators: %s will be replaced with html attributes for the link
                        __('Fill in your phone number without any spaces and symbols. Read WhatsApps recommendations by <a %s>clicking here.</a>', 'buttonizer-multifunctional-button'),
                        'href="https://faq.whatsapp.com/en/android/26000030/" target="_blank"'
                    ),

                    'twitter_info' => sprintf(
                        // translators: %1$s and %2$s will be replaced with links
                        __('When you want to use Twitter DM you will need to find your Twitter User ID and allow direct messages from anyone. To find your account ID <a %1$s>click here</a>. And to read more about how to allow direct messages from anyone, <a %2$s>click here</a>.', 'buttonizer-multifunctional-button'),
                        'href="https://tweeterid.com/" target="_blank"', 'href="https://help.twitter.com/nl/using-twitter/direct-messages#receive" target="_blank"'
                    ),
                ],
                'placeholders' => [
                    'sms' => __('Text', 'buttonizer-multifunctional-button'),
                    'message' => __('Message', 'buttonizer-multifunctional-button'),
                    'username' => __('Username', 'buttonizer-multifunctional-button'),
                    'mail' => [ 
                        'recipient' => __('Recipient', 'buttonizer-multifunctional-button'),
                        'subject' => __('Subject', 'buttonizer-multifunctional-button'),
                        'body' => __('Body', 'buttonizer-multifunctional-button'),
                    ]
                ]

            ],

            'open_new_tab' => [
                'title' => __('Open new tab', 'buttonizer-multifunctional-button'),
                'description' => __('When the button is clicked, open in new tab.', 'buttonizer-multifunctional-button'),
            ],

            'button_group_window' => [
                'filters' => __('Filters', 'buttonizer-multifunctional-button'),
                'styling' => __('Styling', 'buttonizer-multifunctional-button'),
                'timeout_scroll' => __('Timeout & Scroll', 'buttonizer-multifunctional-button'),
            ]
        ];
    }

    /**
     * Settings window
     *
     * @return array
     */
    private function settingsWindow() {
        return [
            'title' => __('Buttonizer settings', 'buttonizer-multifunctional-button'),

            'icon_library' => [
                'title' => __('Icon library', 'buttonizer-multifunctional-button'),
                'free' => __('free', 'buttonizer-multifunctional-button'),
                'latest' => __('Latest (automatic)', 'buttonizer-multifunctional-button'),
                'info' => __('If your theme automatically loads in a library, just select the correct icon library instead.', 'buttonizer-multifunctional-button'),

                // Select library version
                'select_version' => [
                    'title' => __('Select version', 'buttonizer-multifunctional-button'),
                    'info' => __('Select the correct version of the library in order to use the icons in Buttonizer.', 'buttonizer-multifunctional-button')
                ],

                // Enter library key
                'library_license_key' => [
                    'info' => __('You have selected an icon library that has premium icons. Enter the library license code to view and use these.', 'buttonizer-multifunctional-button'),
                    'how_does_it_work' => __('How does this work?', 'buttonizer-multifunctional-button'),

                    'enter_integrity_code' =>
                        sprintf(
                            // translators: String will be replaced with 'integrity' or 'license'
                            __('Enter %s code', 'buttonizer-multifunctional-button'),
                            'integrity'
                        ),
                ],

                // Import icon library
                'import_library' => [
                    'title' => __('Import icon library', 'buttonizer-multifunctional-button'),
                    'info' => __('Should Buttonizer import the icon library into your theme? If your theme already imports the library you can disable this.', 'buttonizer-multifunctional-button')
                ],
            ],

            // Google analytics
            'google_analytics' => [
                'intro' => __('When enabled, Buttonizer will automatically log clicks to your Google Analytics website. You can force Buttonizer not to use the Google Analytics by disabling this switch.', 'buttonizer-multifunctional-button'),

                // translators: Please keep the code-example 'UA-000000-2'
                'input_info' => __('Insert the Google Analytics tracking code here. Example: UA-000000-2', 'buttonizer-multifunctional-button'),

                'link' => __('Where can I see my click data of my buttons in Google Analytics?', 'buttonizer-multifunctional-button'),
            ],

            // Other settings
            'other_settings' => [
                'title' => __('Other settings', 'buttonizer-multifunctional-button'),

                'admin_button' => [
                    'title' => __('Show admin top bar', 'buttonizer-multifunctional-button'),
                    'info' => __('Hide Buttonizer in the admin top bar by disabling this setting.', 'buttonizer-multifunctional-button')
                ],

                'tooltips' => [
                    'title' => __('Show tooltips', 'buttonizer-multifunctional-button'),
                    'info' => __('Hide the tooltips by disabling this setting.', 'buttonizer-multifunctional-button')
                ],

                'subdomain' => [
                    'title' => __('Subdomain support', 'buttonizer-multifunctional-button'),
                    'info' => __('Some WordPress websites use subdomains for content purposes. Enable this setting to allow Buttonizer to load on your subdomains. Only enable this when you need it.', 'buttonizer-multifunctional-button')
                ]
            ],

            // Reset
            'reset' => [
                'title' => __('Reset', 'buttonizer-multifunctional-button'),
                'info' => __('This is a way to reset Buttonizer to the default settings.', 'buttonizer-multifunctional-button'),

                'what_will_happen' => [
                    'title' => __('What will happen when I click the red button below?', 'buttonizer-multifunctional-button'),
                    'info' => __('The plugin will get a \'factory reset\'. All settings of Buttonizer will get deleted, reverting back to when you first installed and activated Buttonizer.', 'buttonizer-multifunctional-button'),
                ],

                'why' => [
                    'title' => __('Why would I do that?', 'buttonizer-multifunctional-button'),
                    'info' => __('Perhaps you ruined your buttons, categories or settings and would like to start from scratch. Or maybe you just feel trying the reset button...', 'buttonizer-multifunctional-button'),
                ],

                'license' => [
                    'title' => __('I have a license, what about that?', 'buttonizer-multifunctional-button'),
                    'info' => __('No worries! Nothing will happen with your license! It only resets the following:', 'buttonizer-multifunctional-button'),

                    'list' => [
                        'buttons' => __('Your buttons', 'buttonizer-multifunctional-button'),
                        'groups' => __('Your button groups', 'buttonizer-multifunctional-button'),
                        'time_schedules' => __('All time schedules', 'buttonizer-multifunctional-button'),
                        'page_rules' => __('All page rules', 'buttonizer-multifunctional-button'),
                        'settings' => __('All other settings of Buttonizer', 'buttonizer-multifunctional-button'),
                        'published' => __('All published settings', 'buttonizer-multifunctional-button'),
                    ]
                ],

                'default_settings' => [
                    'title' => __('Okay, sounds good. What then?', 'buttonizer-multifunctional-button'),
                    'info' => __('Buttonizer will revert back to the default settings and feel like a fresh installation. That\'s all.', 'buttonizer-multifunctional-button'),
                ],

                'ready' => [
                    'title' => __('Okay, I\'m ready!', 'buttonizer-multifunctional-button'),
                    'info' => __('Press the red button below to reset Buttonizer. There will be no more warnings.', 'buttonizer-multifunctional-button'),
                    'button' => __('Reset Buttonizer!', 'buttonizer-multifunctional-button'),
                ],
            ]
        ];
    }

    /**
     * Top bar
     *
     * @return array
     */
    private function bar() {
        return [
            'previous_session' => __('Loaded changes from previous session', 'buttonizer-multifunctional-button'),
            'preview' => [
                'no_changes' => __('You left the Buttonizer preview window. You will not see the changes you make.', 'buttonizer-multifunctional-button'),
                'return' => __('Return to preview', 'buttonizer-multifunctional-button'),
                'desktop' => __('Desktop preview', 'buttonizer-multifunctional-button'),
                'tablet' => __('Tablet preview', 'buttonizer-multifunctional-button'),
                'mobile' => __('Mobile preview', 'buttonizer-multifunctional-button'),
            ],
            'menu' => [
                'version' => sprintf(
                    // translators: %s becomes version number (eg 2.4.2)
                    __('Version %s', 'buttonizer-multifunctional-button'),
                    BUTTONIZER_VERSION
                ),
                'knowledgebase' => [
                    'title' => __('Knowledge base', 'buttonizer-multifunctional-button'),
                    'description' => __('Find out everything you need to know about Buttonizer', 'buttonizer-multifunctional-button'),
                ],
                // Support
                'support_group' => __('Support', 'buttonizer-multifunctional-button'),
                'support' => [
                    'title' => __('I need support', 'buttonizer-multifunctional-button'),
                    'description' => __('Direct support with the Buttonizer developers', 'buttonizer-multifunctional-button'),
                ],
                'community' => [
                    'title' => __('Community', 'buttonizer-multifunctional-button'),
                    'description' => __('Interact with other Buttonizers', 'buttonizer-multifunctional-button'),
                ],
                'tour' => [
                    'title' => __('Buttonizer tour (recommended!)', 'buttonizer-multifunctional-button'),
                    'description' => __('Start the 2 minute tour', 'buttonizer-multifunctional-button'),
                ],

                // Account
                'account_group' => __('Buttonizer account', 'buttonizer-multifunctional-button'),
                'account' => [
                    'title' => __('My Account', 'buttonizer-multifunctional-button'),
                ],
                'upgrade' => [
                    'title' => __('Upgrade or pricing', 'buttonizer-multifunctional-button'),
                ],
                'affiliation' => [
                    'title' => __('Affiliation', 'buttonizer-multifunctional-button'),
                    'description' => __('Earn $ by promoting Buttonizer', 'buttonizer-multifunctional-button'),
                ],
                'options' => [
                    'title' => __('Options', 'buttonizer-multifunctional-button')
                ],
            ],
            'buttons' => [
                'now_editing' => __('Now editing:', 'buttonizer-multifunctional-button'),
                'tippy_new_group' => __('This creates a new group with 2 buttons inside.', 'buttonizer-multifunctional-button'),
                'tippy_single_button' => __('This creates a new button, outside other groups.', 'buttonizer-multifunctional-button'),
                'tippy_learn_more' => __('Learn more about groups and buttons', 'buttonizer-multifunctional-button'),
                'tippy_drag_warning' => __('You can\'t drag the only button left in a group!', 'buttonizer-multifunctional-button'),
                'convert_to_group' => __('Convert to group', 'buttonizer-multifunctional-button'),

                'delete_button' => [
                    'window_title_button' => __('Delete button', 'buttonizer-multifunctional-button'),
                    'window_title_group' => __('Delete group', 'buttonizer-multifunctional-button'),
                    'question_button' => __('Are you sure you want to remove this button?', 'buttonizer-multifunctional-button'),
                    'question_group' => __('Are you sure you want to remove this group?', 'buttonizer-multifunctional-button'),
                    'question_group_multiple_buttons' => sprintf(
                        // translators: %s will be replaced with a number
                        __('Are you sure you want to remove this full group? It contains %s buttons.', 'buttonizer-multifunctional-button'),
                        '{0}'
                    ),

                    'question_remove_button' => sprintf(
                        // translators: %s will be replaced with the button name
                        __('Are you sure you want to remove the button called \'%s\'?', 'buttonizer-multifunctional-button'),
                        '{0}'
                    ),

                    'cannot_delete' => __('You cannot delete this button because this the only button left.', 'buttonizer-multifunctional-button'),
                    'cannot_delete_group' => __('You cannot delete this group because this the only group left.', 'buttonizer-multifunctional-button'),
                ]
            ]
        ];
    }

    /**
     * Page rules
     *
     * @return array
     */
    private function page_rules() {
        return [
            'name' => __('Page rules', 'buttonizer-multifunctional-button'),
            'window_title' => __('Page Rule Manager', 'buttonizer-multifunctional-button'),
            'window_description' => __('You can setup page rules via this window. When you add pages or definitions to this page rule, the buttons attached to this page rule will be shown or hidden depending on their settings as soon this rule is triggered.', 'buttonizer-multifunctional-button'),
            'pro_description' => __('You can setup page rules that will get triggered on specific pages or user roles. You can create unlimited page rules with multiple rules to trigger.', 'buttonizer-multifunctional-button'),
            'add_page_rule' => __('Add page rule', 'buttonizer-multifunctional-button'),
            'add_rule' => __('Add rule', 'buttonizer-multifunctional-button'),
            'name_your_page_rule' => __('Name your page rule:', 'buttonizer-multifunctional-button'),
            'single_name' => __('Page rule', 'buttonizer-multifunctional-button'),
            'input_any_page' => __('Show the button on any page', 'buttonizer-multifunctional-button'),
            'remove_page_rule' => __('Remove page rule', 'buttonizer-multifunctional-button'),

            // Types
            'types' => [
                'must_meet' => __('All conditions must meet (AND)', 'buttonizer-multifunctional-button'),
                'one_meets' => __('At least one condition must meet (OR)', 'buttonizer-multifunctional-button'),
            ],

            // Rules and/or
            'rule_and' => __('and', 'buttonizer-multifunctional-button'),
            'rule_or' => __('or', 'buttonizer-multifunctional-button'),

            'rules' => [
                'page' => __('Page', 'buttonizer-multifunctional-button'),
                'page_title' => __('Page title contains', 'buttonizer-multifunctional-button'),
                'blog' => __('Blog', 'buttonizer-multifunctional-button'),
                'blog_title' => __('Blog title contains', 'buttonizer-multifunctional-button'),
                'category' => __('Category', 'buttonizer-multifunctional-button'),
                'url_contains' => __('URL contains', 'buttonizer-multifunctional-button'),
                'url_starts' => __('URL begins with', 'buttonizer-multifunctional-button'),
                'url_ends' => __('URL ends with', 'buttonizer-multifunctional-button'),
                'user_roles' => __('User has role', 'buttonizer-multifunctional-button'),
            ],

            'select_items' => __('Select one or more items.', 'buttonizer-multifunctional-button'),
            'remove_rule' => __('Are you sure you want to remove this rule?', 'buttonizer-multifunctional-button'),
            'remove_rule_aborted' => __('Aborted. Each page rule must keep at least one rule.', 'buttonizer-multifunctional-button'),
            'warning_changing_rule' => __('You still have selected values, are you sure you want to remove this?', 'buttonizer-multifunctional-button'),
            'rule_value' => __('Rule value', 'buttonizer-multifunctional-button'),
        ];
    }

    /**
     * Time schedules
     *
     * @return array
     */
    private function time_schedules() {
        return [
            'name' => __('Time schedules', 'buttonizer-multifunctional-button'),
            'single_name' => __('Time schedule', 'buttonizer-multifunctional-button'),
            'window_title' => __('Time schedule manager', 'buttonizer-multifunctional-button'),
            'pro_description' => __('You can setup time schedules that will get triggered during specific times of a day. It is even possible to change the schedule actions for specific days. You can create an unlimited amount of schedules.', 'buttonizer-multifunctional-button'),

            // Schedule
            'add_schedule' => __('Add schedule', 'buttonizer-multifunctional-button'),
            'add_date' => __('Add date', 'buttonizer-multifunctional-button'),
            'new_schedule' => __('New schedule', 'buttonizer-multifunctional-button'),
            'name_schedule' => __('Name the new time schedule:', 'buttonizer-multifunctional-button'),
            'rename_schedule' => __('Rename schedule to:', 'buttonizer-multifunctional-button'),
            'show_any_time' => __('Show the button at any time', 'buttonizer-multifunctional-button'),
            'trigger_on' => sprintf(
                // translators: %s becomes weekday or specific date ('Trigger on monday' or 'Trigger om January 1, 2019')
                __('Trigger on %s', 'buttonizer-multifunctional-button'),
                ''),

            // translators: 'till' as in '10:00 till 11:30'
            'till' => __('till', 'buttonizer-multifunctional-button'),

            // Remove
            'remove_schedule' => __('Remove schedule', 'buttonizer-multifunctional-button'),
            'must_keep_one' => __('You must keep at least one schedule', 'buttonizer-multifunctional-button'),
            'current_timezone' => __('Current timezone:', 'buttonizer-multifunctional-button'),

            'remove_date' => [
                'title' => __('Remove date', 'buttonizer-multifunctional-button'),
                'message' => __('Are you sure you want to remove this date?', 'buttonizer-multifunctional-button'),
            ],

            // Errors
            'errors' => [
                'time_invalid' => sprintf(
                    // translators: The strings will be replaced with time (example: 10:10)
                    __('Sorry, the time \'%1$s\' was invalid. Reverting back to \'%2$s\'.', 'buttonizer-multifunctional-button'),
                    '{0}', '{1}'
                ),

                'time_overlap_start' => sprintf(
                    // translators: The strings will be replaced with time (example: 10:10)
                    __('The start time \'%1$s\' conflicts with the end time \'%2$s\'. Time has been reverted to \'%3$s\'. Make sure you have at least 5 minutes overlap.', 'buttonizer-multifunctional-button'),
                    '{0}', '{1}', '{2}'
                ),

                'time_overlap_end' => sprintf(
                    // translators: The strings will be replaced with time (example: 10:10)
                    __('The end time \'%1$s\' conflicts with the start time \'%2$s\'. Time has been reverted to \'%3$s\'. Make sure you have at least 5 minutes overlap.', 'buttonizer-multifunctional-button'),
                    '{0}', '{1}', '{2}'
                ),
            ],

            // Weekdays
            'weekdays' => [
                'weekdays' => __('Weekdays', 'buttonizer-multifunctional-button'),
                'monday' => __('Monday', 'buttonizer-multifunctional-button'),
                'tuesday' => __('Tuesday', 'buttonizer-multifunctional-button'),
                'wednesday' => __('Wednesday', 'buttonizer-multifunctional-button'),
                'thursday' => __('Thursday', 'buttonizer-multifunctional-button'),
                'friday' => __('Friday', 'buttonizer-multifunctional-button'),
                'saturday' => __('Saturday', 'buttonizer-multifunctional-button'),
                'sunday' => __('Sunday', 'buttonizer-multifunctional-button'),
            ],

            'exclude_dates' => __('Exclude dates', 'buttonizer-multifunctional-button'),
            'exclude_dates_info' => __('You are able to add specific dates to show or hide the buttons attached to this time scheme. So you can say something like this: "<i>I am opened on January 22th until 22:00 (10 PM) because of some special evening we organize.</i>". You can add those dates and configure them. The rule will overwrite the default settings for that weekday.', 'buttonizer-multifunctional-button'),

            // Trigger from
            'input_start' => [
                'label' => __('Start triggering buttons from', 'buttonizer-multifunctional-button'),
                'placeholder' => __('Click to add start date', 'buttonizer-multifunctional-button'),

                'error' => sprintf(
                    // translators: The string will become a date
                    __('Warning! Your start date \'%s\' hast past the end date of this schedule. If you do not change this date the schedule will not work.', 'buttonizer-multifunctional-button'),
                    '{0}'
                )
            ],

            // Trigger until
            'input_end' => [
                'label' => __('Stop triggering buttons after (optional)', 'buttonizer-multifunctional-button'),
                'placeholder' => __('Click to add ending date', 'buttonizer-multifunctional-button'),
                'placeholder_empty' => __('Select a date in the datepicker below', 'buttonizer-multifunctional-button'),
                'error' => sprintf(
                    // translators: The string will become a date
                    __('Warning! Your end date \'%s\' has past the start date of this schedule. If you do not change this date the schedule will not work.', 'buttonizer-multifunctional-button'),
                    '{0}'
                )
            ],
        ];
    }

    /**
     * Saving
     *
     * @return array
     */
    private function migration() {
        return [
            'title' => __('Hi Buttonizer!', 'buttonizer-multifunctional-button'),
            'intro' => __('It appears you\'ve installed Buttonizer 2.0 before. But, you installed version 1.5 again later on and updated back to 2.0!', 'buttonizer-multifunctional-button'),
            'convert' => __('The migration progress did not run as it did back then. In order to convert your buttons, press the button below!', 'buttonizer-multifunctional-button'),
            'popping_up' => sprintf(
                // translators: %1$s and %2$s will become HTML icons as preview
                __('If this window keeps popping up, even when you\'ve tried to convert the buttons, try to reset Buttonizer. Go to the \'cog\' icon (%1$s) on the top bar, select \'Options %2$s\' and the tab \'Reset\' and follow the instructions.', 'buttonizer-multifunctional-button'),
                '<i class="fas fa-cog"></i>',
                '<i class="fas fa-cogs"></i>'
            ),
            'convert_buttons' => __('Convert my buttons!', 'buttonizer-multifunctional-button'),
        ];
    }

    /**
     * Saving
     *
     * @return array
     */
    private function premium() {
        return [
            'modal' => [
                'title' => __('Premium feature', 'buttonizer-multifunctional-button'),
                'describe' => __('Hi there, this function is a premium feature. We will describe what this feature will do:', 'buttonizer-multifunctional-button'),
                'what_do_i_get' => __('What you get as a premium user:', 'buttonizer-multifunctional-button'),
                'go_pro' => __('Go pro', 'buttonizer-multifunctional-button'),

                'list' => [
                    'time_schedules' => __('Show button(groups) using the advanced time schedules', 'buttonizer-multifunctional-button'),
                    'page_rules' => __('Show button(groups) on specific pages using advanced page rules', 'buttonizer-multifunctional-button'),
                    'button_groups' => __('Create multiple button groups', 'buttonizer-multifunctional-button'),
                    'custom_images' => __('Custom button background &amp; icon image', 'buttonizer-multifunctional-button'),
                    'exit_intent' => __('Exit intent', 'buttonizer-multifunctional-button'),
                    'show_on_scroll' => __('Show or hide on scroll', 'buttonizer-multifunctional-button'),
                    'show_on_timeout' => __('Show on timeout', 'buttonizer-multifunctional-button'),
                    'custom_class' => __('Be able to set CSS class names and button IDs', 'buttonizer-multifunctional-button'),
                    'javascript' => __('Execute javascript on button clicks', 'buttonizer-multifunctional-button'),
                ]
            ],
            'time_schedules' => [
                'first_time_schedule' => __('My first time schedule', 'buttonizer-multifunctional-button')
            ],

            'page_rules' => [
                'first_page_rule' => __('My first page rule', 'buttonizer-multifunctional-button')
            ],
            'multiple_button_groups' => __('You are able to add multiple groups on different positions', 'buttonizer-multifunctional-button')
        ];
    }

    /**
     * Warm welcome!
     *
     * @return array
     */
    private function welcome() {
        return [
            'title' => __('Welcome to Buttonizer', 'buttonizer-multifunctional-button'),
            'intro' => sprintf(
                // translators: %s will become 'Buttonizer'
                __('We are pleased to welcome you to <b>%s</b>!', 'buttonizer-multifunctional-button'),
                'Buttonizer 2.0'
            ),
            'tour'  => __('We\'ve created a tour for our new users. Would you like to take the tour?', 'buttonizer-multifunctional-button'),
            'already_know' => __('No thanks, I know how it works', 'buttonizer-multifunctional-button'),
            'take_tour' => __('Yes please', 'buttonizer-multifunctional-button'),

            'exit_tour' => __('Exit tour', 'buttonizer-multifunctional-button'),
            'tour-steps' => [
                'step-0' => [
                    'title' => __('Welcome to the Buttonizer tour!', 'buttonizer-multifunctional-button'),
                    'description' => __('Start the tour and save time. Master the Buttonizer skills in only two minutes.', 'buttonizer-multifunctional-button'),
                    'keyboard' => sprintf(
                        // translators: First %1$s will be an left-key icon, second %2$s will be right-key icon, third %3$s will be an keyboard icon
                        __('You can use the %1$s and %2$s keys on your %3$s to navigate.', 'buttonizer-multifunctional-button'),
                        '<i class="far fa-caret-square-left"></i>', '<i class="far fa-caret-square-right"></i>', '<i class="far fa-keyboard"></i>'
                    ),
                ],
                'step-1' => [
                    'title' => __('Buttonizer bar', 'buttonizer-multifunctional-button'),
                    'description' => __('Manage all your Floating Action Buttons and Floating menu\'s in the Buttonizer bar.', 'buttonizer-multifunctional-button'),
                ],
                'step-2' => [
                    'title' => __('Preview', 'buttonizer-multifunctional-button'),
                    'description' => __('Watch the impact of your changes in the preview pane. Your buttons will only be visible to your website visitor after you click on \'Publish\'.', 'buttonizer-multifunctional-button'),
                ],
                'step-3' => [
                    'title' => __('Top bar', 'buttonizer-multifunctional-button'),
                    'description' => __('In the top bar, you can:', 'buttonizer-multifunctional-button'),

                    'list' => [
                        'close' => __('Click the <b>\'X\'</b> to go back to WordPress', 'buttonizer-multifunctional-button'),
                        'revert' => __('<b>Revert</b> changes you have made', 'buttonizer-multifunctional-button'),
                        'publish' => __('<b>Publish</b> all your changes', 'buttonizer-multifunctional-button'),
                        'general-settings' => __('Access the <b>general settings</b>', 'buttonizer-multifunctional-button'),
                    ]
                ],
                'step-4' => [
                    'description' => sprintf(
                        // translators: %s will be replaced with an arrow and an ENTER (new line)
                        __('Click here %s to go to Buttonizer\'s general settings.', 'buttonizer-multifunctional-button'),
                        '<b>&rarr;</b> <br>'
                    ),
                ],
                'step-5' => [
                    'title' => __('Menu', 'buttonizer-multifunctional-button'),

                    'list' => [
                        'knowledgebase' => __('Want to know what you can do with Buttonizer? Take a look at our knowledge base!', 'buttonizer-multifunctional-button'),
                        'support' => __('Visit our support page for help from us or other users.', 'buttonizer-multifunctional-button'),
                        'community' => __('Visit our community page and interact with other Buttonizer users!', 'buttonizer-multifunctional-button'),
                        'account' => __('View your account details and license.', 'buttonizer-multifunctional-button'),
                        'upgrade' => __('Upgrade or extend your license.', 'buttonizer-multifunctional-button'),
                        'affiliation' => __('Happy with the plugin? Become an ambassador and earn some cash ;-)', 'buttonizer-multifunctional-button'),
                        'options' => __('Change general settings like icon libraries and Google Analytics.', 'buttonizer-multifunctional-button'),
                    ]
                ],
                'step-6' => [
                    'description' => __('Click on <b>Options</b> to open Buttonizer\'s general settings.', 'buttonizer-multifunctional-button'),
                ],
                'step-7' => [
                    'title' => __('Buttonizer settings', 'buttonizer-multifunctional-button'),

                    'list' => [
                        'icon-library' => __('In this section, you will be able to choose other icon libraries, the icon library version and whether Buttonizer should import the icon library.', 'buttonizer-multifunctional-button'),
                        'google-analytics' => __('Want to track your button events? Place your Google Analytics code here!', 'buttonizer-multifunctional-button'),
                        'reset' => __('Completely reset Buttonizers data.', 'buttonizer-multifunctional-button')
                    ]
                ],
                'step-8' => [
                    'title' => __('Button group', 'buttonizer-multifunctional-button'),
                    'multiple_buttons' => __('A button group contains buttons.', 'buttonizer-multifunctional-button'),
                    'visible' => __('Button groups are only visible when there are <u><b>2 or more buttons</b></u> within the group.', 'buttonizer-multifunctional-button'),
                    'position' => __('The buttons in a button group are dedicated to one position. Add multiple button groups if you want to create more floating action buttons dedicated to different positions.', 'buttonizer-multifunctional-button'),
                ],
                'step-9' => [
                    'description' => __('Click here to show group settings.', 'buttonizer-multifunctional-button'),
                ],
                'step-10' => [
                    'title' => __('Group settings', 'buttonizer-multifunctional-button'),
                    'description' => __('Change the style of the button group here.', 'buttonizer-multifunctional-button'),
                    'action' => __('Click on the left arrow to go back.', 'buttonizer-multifunctional-button'),
                ],
                'step-11' => [
                    'title' => __('Position & device visibility', 'buttonizer-multifunctional-button'),
                    'position' => __('When you change the position of the button group it will move the whole group, including the buttons.', 'buttonizer-multifunctional-button'),
                    'visibility' => __('Choose whether you want the <b><u>whole group</u></b> to be visible on desktop or mobile devices.', 'buttonizer-multifunctional-button'),
                ],
                'step-12' => [
                    'title' => __('Menu style', 'buttonizer-multifunctional-button'),
                    'start_opened' => __('Setup Buttonizer to open automatically!', 'buttonizer-multifunctional-button'),
                    'menu_style' => __('Change the style of your floating menu.', 'buttonizer-multifunctional-button'),
                    'animation' => __('Buttonizer will animate every 10 seconds in order to capture the visitor\'s attention.', 'buttonizer-multifunctional-button'),
                ],
                'step-13' => [
                    'title' => __('Group style', 'buttonizer-multifunctional-button'),
                    'background_color' => __('Change the color of the button group.', 'buttonizer-multifunctional-button'),
                    'border_radius' => __('Change the border radius of the button group!', 'buttonizer-multifunctional-button'),
                    'background_image' => __('Choose an image to use as a background of the button group.', 'buttonizer-multifunctional-button'),
                ],
                'step-14' => [
                    'title' => __('Group style', 'buttonizer-multifunctional-button'),
                    'icon' => __('Choose your favorite icon from your selected icon library.', 'buttonizer-multifunctional-button'),
                    'background_image' => __('Choose an image to use as a background of the button group.', 'buttonizer-multifunctional-button'),
                ],
                'step-15' => __('Quick setting to show or hide buttons depending device!', 'buttonizer-multifunctional-button'),
                'step-before-button' => [
                    'action' => __('Click here to add a new button.', 'buttonizer-multifunctional-button'),
                    'msg1' => sprintf(
                        // translators: %s will be replaced with 'Add button'
                        __('Don\'t click on next... Click on \'%s\'', 'buttonizer-multifunctional-button'),
                        __('Add button', 'buttonizer-multifunctional-button') . ' +'
                    ),
                    'msg2' => sprintf(
                        // translators: %s will be replaced with 'Add button'
                        __('If you don\'t want to click \'%s\', I can do you the honor :)', 'buttonizer-multifunctional-button'),
                        __('Add button', 'buttonizer-multifunctional-button') . ' +'
                    ),
                    'msg3' => __('Here, on the left... If you won\'t click it, I will click it >:-)', 'buttonizer-multifunctional-button'),
                    'msg4' => __('Hello? Please click that button...', 'buttonizer-multifunctional-button'),
                ],

                'step-23' =>  __('You have created a new button! This is a button. Buttons are contained within a group.', 'buttonizer-multifunctional-button'),
                'step-26' =>  __('Click here to open the menu.', 'buttonizer-multifunctional-button'),
                'step-27' => [
                    'edit_button' => __('Edit the style of the button.', 'buttonizer-multifunctional-button'),
                    'advanced_settings' => __('Make the button appear/hide on certain pages and during certain times! This function is only available for our premium users.', 'buttonizer-multifunctional-button'),
                    'rename' => __('Rename the button.', 'buttonizer-multifunctional-button'),
                    'duplicate' => __('Make a copy of the button.', 'buttonizer-multifunctional-button'),
                    'delete' => __('Delete the button.', 'buttonizer-multifunctional-button'),
                ],
                'step-28' =>  __('Click here to show the button settings.', 'buttonizer-multifunctional-button'),
                'step-29' => [
                    'title' => __('Button settings', 'buttonizer-multifunctional-button'),
                    'description' => __('These are the button settings. Pretty similar to the group settings.', 'buttonizer-multifunctional-button'),
                ],
                'step-30' => [
                    'title' => __('Position & device visibility', 'buttonizer-multifunctional-button'),
                    'position' => __('When you change the position of the button group it will move the whole group, including the buttons.', 'buttonizer-multifunctional-button'),
                    'visibility' => __('You can choose whether you want the <b><u>whole group</u></b> to be visible on desktop or mobile devices.', 'buttonizer-multifunctional-button'),
                ],
                'step-31' => [
                    'enabled' => __('When enabled, the button will copy the button and label style of the group.', 'buttonizer-multifunctional-button'),
                    'turning_off' => __('By turning it of you can change the style of the button.', 'buttonizer-multifunctional-button'),
                ],
                'step-34' => [
                    'title' => __('Revert or save', 'buttonizer-multifunctional-button'),
                    'revert_title' => __('Revert changes', 'buttonizer-multifunctional-button'),
                    'revert_description' => __('Delete all the changes you\'ve made this session.', 'buttonizer-multifunctional-button'),
                    'save_title' => __('Save & publish', 'buttonizer-multifunctional-button'),
                    'save_description' => __('Save and publish the changes you\'ve made this session.', 'buttonizer-multifunctional-button'),
                ],
                'final' => [
                    'title' => __('That was it!', 'buttonizer-multifunctional-button'),
                    'intro' => sprintf(
                    // translators: %s will be the link to the community forums
                        __('Thank you for taking the tour, that\'s all folks! We hope you\'re ready to start implementing Buttonizer to meet your goals! If you have any questions, ask them on the %s forums!', 'buttonizer-multifunctional-button'),
                        '<a href="https://community.buttonizer.pro" target="_blank">Buttonizer Community</a>'
                    ),
                    'outro' => __('If you have any feedback regarding the Buttonizer Tour, we\'d love to hear it!', 'buttonizer-multifunctional-button')
                ],
            ]
        ];
    }
}

/**
 * This is the end of the document with all strings.
 *
 * It was a lot of work to make Buttonizer translatable.
 *
 * Mail some love to jasper@buttonizer.pro
 */