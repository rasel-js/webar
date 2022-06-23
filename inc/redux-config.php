<?php
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    $opt_name = 'redux_demo';

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

	$args = array(
        'display_name'         => $theme->get( 'Name' ),
        'display_version'      => $theme->get( 'Version' ),
        'menu_title'           => esc_html__( 'Theme Options', 'webar' ),
        'customizer'           => true,
        'menu_icon'            => 'dashicons-screenoptions',
        'page_priority'     => 25,
        'dev_mode'          => false

    );

    Redux::setArgs( $opt_name, $args );

    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Header', 'webar' ),
        'id'     => 'basic',
        'desc'   => esc_html__( 'Completely Customize Your Header Area.', 'webar' ),
        'icon'   => 'el el-home',
        'fields' => array(
			array(
                'id'       => 'top-email',
                'type'     => 'text',
                'default'  => 'rasel8455@gmail.com',
                'title'    => esc_html__( 'Email', 'webar' ),
                'desc'     => esc_html__( 'Topbar Email.', 'webar' ),
                'hint'     => array(
                    'content' => 'Write Your Email'
                )
                ),

            array(
                'id'       => 'top-phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone', 'webar' ),
                'desc'     => esc_html__( 'Topbar Phone.', 'webar' ),
                'default'  => '01789638455',
                'hint'     => array(
                    'content' => 'Write Your Phone Number'
                )
                ),

     
            //topbar color
            array(
                'id'        => 'tp-bg-color',
                'type'      => 'color',
                'title'     => 'TopBar Background Color',
				
                'output' => array(
                    'background-color' => '.header-top',
					'color'     => '#635CDB',
                ),
				
                
                                      
            ),


             //topbar text color
             array(
                'id'        => 'tp-text-color',
                'type'      => 'color',
                'title'     => 'TopBar Text Color',
                'output' => array(
                    'color' => '.header-top a',
                    'color'     => '#635CDB',
                ),

                                 
            ),

             array(
                'id'        => 'tp-social-color',
                'type'      => 'color',
                'title'     => 'TopBar Social Icon Color',
                'output' => array(
                    'color' => '.header-social i',
                    
                ),           
            ),


            //Topbar social icon
                array(
                    'id'       => 'top-social-link',
                    'type'     => 'sortable',
                    'title'    => esc_html__('Topbar Social Link', 'webar'),
                    'label'    => true,
                    'options'  => array(
                        'Facebook'     => 'Facebook url',
                        'Twitter'     => 'Twitter url',
                        'Linkedin'     => 'Linkedin url',
                        'YouTube'     => 'Youtube url',
                        'Google+'     => 'Google+ url',
                        'Instagram'     => 'Instagram url',
                    ),
                ),

                //Header logo
               
                
                array(
                    'id'       => 'logo-name',
                    'type'     => 'text',
                    'title'    => esc_html__( 'Logo Name', 'webar' ),
                    
                    'default'  => 'Webar',
                    'hint'     => array(
                        'content' => 'Write Your Phone Number'
                    )
                    ),
                            

        ),

      

                     
                        

    ) );

    //Footer Section
    Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Footer Area', 'webar' ),
        'id'     => 'basic-footer',
        'desc'   => esc_html__( 'Completely Customize Your Footer Area.', 'webar' ),
        'icon'   => 'el el-indent-right',
        'fields' => array(
			array(
                'id'       => 'footer-address',
                'type'     => 'text',
                'default'  => '165 Kulkuri, Damudya Shariatpur',
                'title'    => esc_html__( 'Location', 'webar' ),
                'desc'     => esc_html__( 'Street Address.', 'webar' ),
                'hint'     => array(
                    'content' => 'Write Your Street Address'
                )
                ),

            array(
                'id'       => 'footer-phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone Number', 'webar' ),
                'desc'     => esc_html__( 'Your Mobile Phone.', 'webar' ),
                'default'  => '01789638455',
                'hint'     => array(
                    'content' => 'Write Your Phone Number'
                )
                ),

            array(
                'id'       => 'footer-tele-phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Tele Phone', 'webar' ),
                'desc'     => esc_html__( 'Your Tele Phone.', 'webar' ),
                'default'  => '+23 0034 5567 341',
                'hint'     => array(
                    'content' => 'Write Your Tele Phone Number'
                )
                ),

            array(
                'id'       => 'footer-email',
                'type'     => 'text',
                'title'    => esc_html__( 'Email', 'webar' ),
                'desc'     => esc_html__( 'Your Email', 'webar' ),
                'default'  => 'rasel19aaaa@gmail.com',
                'hint'     => array(
                    'content' => 'Write Your Email Address'
                )
                ),

            array(
                'id'       => 'footer-website',
                'type'     => 'text',
                'title'    => esc_html__( 'Website Link', 'webar' ),
                'desc'     => esc_html__( 'Your Website Link', 'webar' ),
                'default'  => 'https://www.hmrasel.com',
                'hint'     => array(
                    'content' => 'Past Your Wesite Link'
                )
                ),

            array(
                'id'       => 'footer-copyright',
                'type'     => 'text',
                'title'    => esc_html__( 'Footer Copyright Text', 'webar' ),
                'desc'     => esc_html__( 'Your Copyright Info', 'webar' ),
                'default'  => '© All Rights Reserved by Rasel 2022',
                'hint'     => array(
                    'content' => 'Write Your Copyright Text'
                )
                ),

        )

        ) );