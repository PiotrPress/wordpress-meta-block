import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import { PanelBody, TextControl } from '@wordpress/components';
import { __ } from '@wordpress/i18n';
import ServerSideRender from '@wordpress/server-side-render';

registerBlockType( 'piotrpress/meta-block', {
    edit: ( { attributes, setAttributes } ) => {
        return (
            <div { ...useBlockProps() }>
                <InspectorControls>
                    <PanelBody>
                        <TextControl
                            label={ __( 'Meta key', 'piotrpress-meta-block' ) }
                            value={ attributes.key }
                            onChange={ ( value ) => setAttributes( { key: value } ) }
                        />
                    </PanelBody>
                </InspectorControls>
                <ServerSideRender
                    block='piotrpress/meta-block'
                    attributes={ attributes }
                />
            </div>
        );
    }
} );