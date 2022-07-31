<?php
namespace Elementor;

class Projects_Widget extends Widget_Base {
    public function get_name() {
        return 'projects';
    }

    public function get_title() {
        return 'Projects';
    }

    public function get_icon() {
        return 'eicon-folder-o';
    }
    
    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'section_title',
            [
                'label' => __('Título & Descripción', 'elementor'),
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Título', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Ingrese su título', 'elementor'),
            ]
        );

        $this->add_control(
            'description',
            [
                'label' => __('Descripción', 'elementor'),
                'label_block' => true,
                'type' => Controls_Manager::TEXT,
                'placeholder' => __('Ingrese su descripción', 'elementor'),
            ]
        );

        $this->add_control(
            'link',
            [
                'label' => __('Link', 'elementor'),
                'type' => Controls_Manager::URL,
                'placeholder' => __('https://ejemplo.com', 'elementor'),
                'default' => [
                    'url' => '',
                ]
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $url = $settings['link']['url'];
        echo "<div class='project-main-container'><i aria-hidden='true' class='fas fa-check project-icon' ></i><div><a href='$url'><h5 class='project-title'>$settings[title]</h5></a> <p class='project-description'>$settings[description]</p></div></div>";
    }

    protected function _content_template() {

    }
}