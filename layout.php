<?php
defined('ABSPATH') || die;
?>

<div id="your_layout" class="tab-pane list_pack">
    <div class="ag-epanel-box ag-box-3">
        <div class="ag-box-title" style="display: none"></div>
        <div class="ag-box-content"></div>
    </div>
</div>

<div id="layout_content" class="hide">
    <div class="ag-epanel-box ag-box-2">
        <div class="ag-box-title" style="position: relative">
            <div class="avatar"></div>
            <div class="button_layout">
                <a target="_blank" class="demo_pack"> <?php esc_attr_e('View Live Demo', 'advanced-theme'); ?> </a>
            </div>
        </div>
        <div class="ag-box-content">
            <div class="parent_close"><a class="close cancel dashicons dashicons-no-alt"></a></div>
            <div class="description">
                <div class="description_title"></div>
                <div class="number_layout"></div>
                <div class="list_layout"></div>
                <div class="status_button" style="display: none;">
                    <a class="download_pack install" href="#" ><?php esc_attr_e('INSTALL LAYOUT', 'advanced-theme'); ?></a>
                    <a class="download_pack active" href="#" ><?php esc_attr_e('Installed', 'advanced-theme'); ?></a>
                    <a class="download_pack login thickbox button"><?php esc_attr_e('Join To Download', 'advanced-theme'); ?></a>
                </div>
            </div>
        </div>
    </div>
</div>