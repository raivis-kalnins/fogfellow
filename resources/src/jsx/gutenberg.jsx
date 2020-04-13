const { __ } = wp.i18n;
const { registerBlockStyle, registerBlockType } = wp.blocks;

const { RichText,
	AlignmentToolbar,
	BlockControls,
	InspectorControls,
	ContrastChecker,
	PanelColorSettings,
	getColorClassName,
	getColorObjectByColorValue,
	MediaUpload,
	MediaUploadCheck,
	InnerBlocks  } = wp.editor;

const { Toolbar,
	Button,
	Tooltip,
	PanelBody,
	PanelRow,
	FormToggle,
	BaseControl,
	IconButton,
	ColorPalette,
	TextControl,
	ToggleControl,
	SelectControl,
	FormFileUpload,
	RangeControl,
	FocalPointPicker } = wp.components;

registerBlockStyle( 'core/image', {
	name: 'rounded-corners',
	label: __( 'Rounded Corners' ),
	isDefault: false,
});

registerBlockStyle( 'core/video', {
	name: 'rounded-corners',
	label: __( 'Rounded Corners' ),
	isDefault: false,
});

registerBlockStyle( 'core/media-text', {
	name: 'rounded-corners',
	label: __( 'Rounded Corners' ),
	isDefault: false,
});

registerBlockType( 'dp-blocks/social-share', {
	title: __( 'Social Share', 'dp-blocks' ),
	icon: 'share-alt2',
	category: 'widgets',
	attributes: {
		alignment: {
			type: "string",
			default: '',
		},
		title: {
			type: 'string',
			selector: 'h6',
		},
		facebook: {
			type: 'bool',
			selector: 'facebook',
			default: true,
		},
		twitter: {
			type: 'bool',
			selector: 'twitter',
			default: true,
		},
		linkedin: {
			type: 'bool',
			selector: 'linkedin',
			default: true,
		}
	},
	edit: ( props ) => {
		const {
			className,
			attributes: {
				title,
				facebook,
				twitter,
				linkedin,
				alignment
			},
			setAttributes,
		} = props;

		const onChangeTitle = ( value ) => {
			setAttributes( { title: value } );
		};

		const onChangeFacebook = ( newValue ) => {
			props.setAttributes( { facebook: !facebook } );
		};

		const onChangeTwitter = ( newValue ) => {
			props.setAttributes( { twitter: !twitter } );
		};
		const onChangeLinkedin = ( newValue ) => {
			props.setAttributes( { linkedin: !linkedin } );
		};

		return(
			<div className={ className }>

				{/* <BlockControls>
					<AlignmentToolbar
						value={ alignment }
						onChange={ onChangeAlignment }
					/>
				</BlockControls> */}

				<InspectorControls>
					<PanelBody title={ __( 'Icons', 'jsforwpblocks' ) }>

						<PanelRow>
							<label htmlFor="facebook-toggle">
								{ __( 'Facebook', 'dp' ) }
							</label>
							<FormToggle
								id="facebook-toggle"
								label={ __( 'Facebook', 'dp' ) }
								checked={ facebook }
								onChange={ onChangeFacebook }
							/>
						</PanelRow>

						<PanelRow>
							<label htmlFor="twitter-toggle">
								{ __( 'Twitter', 'dp' ) }
							</label>
							<FormToggle
								id="twitter-toggle"
								label={ __( 'Twitter', 'dp' ) }
								checked={ twitter }
								onChange={ onChangeTwitter }
							/>
						</PanelRow>

						<PanelRow>
							<label htmlFor="linkedin-toggle">
								{ __( 'Linkedin', 'dp' ) }
							</label>
							<FormToggle
								id="linkedin-toggle"
								label={ __( 'Linkedin', 'dp' ) }
								checked={ linkedin }
								onChange={ onChangeLinkedin }
							/>
						</PanelRow>

					</PanelBody>
				</InspectorControls>

				<RichText
					tagName="h2"
					className="is-6 is-family-secondary has-text-weight-bold"
					placeholder={ __( 'Section title…', 'dp-blocks' ) }
					value={ title }
					onChange={ onChangeTitle }
					keepPlaceholderOnFocus={true}
				/>
			</div>
		);
	},
	save: ( props ) => {
		return null;
	},
} );
