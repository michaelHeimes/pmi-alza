(function (wp) {
	const { addFilter } = wp.hooks;
	const { createHigherOrderComponent } = wp.compose;
	const { InspectorControls } = wp.blockEditor;
	const { PanelBody, ToggleControl } = wp.components;
	const { Fragment, createElement } = wp.element;

	/**
	 * Add new attribute to core/columns (the wrapper)
	 */
	addFilter(
		'blocks.registerBlockType',
		'mytheme/extend-core-columns-attributes',
		function (settings, name) {
			if (name !== 'core/columns') {
				return settings;
			}

			settings.attributes = Object.assign({}, settings.attributes, {
				removeMobileSpacing: {
					type: 'boolean',
					default: false,
				},
			});

			return settings;
		}
	);

	/**
	 * Add toggle in the block inspector
	 */
	const addCustomColumnsSetting = createHigherOrderComponent(function (BlockEdit) {
		return function (props) {
			if (props.name !== 'core/columns') {
				return createElement(BlockEdit, props);
			}

			const { attributes, setAttributes } = props;
			const removeMobileSpacing = attributes.removeMobileSpacing;

			return createElement(
				Fragment,
				{},
				createElement(BlockEdit, props),
				createElement(
					InspectorControls,
					{},
					createElement(
						PanelBody,
						{ title: 'Mobile Spacing' },
						createElement(ToggleControl, {
							label: 'Remove column vertical spacing on mobile',
							checked: !!removeMobileSpacing,
							onChange: function (value) {
								setAttributes({ removeMobileSpacing: value });
							},
						})
					)
				)
			);
		};
	}, 'addCustomColumnsSetting');

	addFilter(
		'editor.BlockEdit',
		'mytheme/add-custom-columns-setting',
		addCustomColumnsSetting
	);

	/**
	 * Add class to saved output
	 */
	addFilter(
		'blocks.getSaveContent.extraProps',
		'mytheme/add-columns-class',
		function (extraProps, blockType, attributes) {
			if (blockType.name === 'core/columns' && attributes.removeMobileSpacing) {
				extraProps.className =
					(extraProps.className || '') +
					' remove-mobile-column-vertical-spacing';
			}
			return extraProps;
		}
	);
})(window.wp);