<?php
defined('ABSPATH') || die;

class Customizer_Font_choice_Value_Control extends \WP_Customize_Control {
	public $type = 'font-choice';

	/**
	 * Render the control's content.
	 *
	 * @author soderlind
	 * @version 1.2.0
	 */
	public function render_content() { ?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<div class="range-slider"  style="width:100%; display:flex;flex-direction: row;justify-content: flex-start;">
				<span  style="width:100%; flex: 1 0 0; vertical-align: middle;">
                    <input class="range-slider__range" type="range" value="<?php echo esc_attr( $this->value() ); ?>" <?php
                    $this->input_attrs();
                    $this->link(); ?> >
				    <span class="range-slider__value">0</span>
                </span>
			</div>
			<?php if ( ! empty( $this->description ) ) : ?>
			<span class="description customize-control-description"><?php echo $this->description; ?></span>
			<?php endif; ?>
		</label> <?php
	}
}
