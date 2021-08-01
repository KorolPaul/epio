//let { registerBlockType } = wp.blocks;

var el = wp.element.createElement,
    registerBlockType = wp.blocks.registerBlockType,
    RichText = wp.editor.RichText;

registerBlockType(
    'blocks/intro',
    {
        title: 'Intro',

        description: 'Main page first block',

        icon: {
            background: '#7e70af',
            foreground: '#fff',
            src: 'format-aside',
        },

        attributes: {
            content: {
                type: 'array',
                source: 'children',
                selector: 'p',
            }
        },

        category: 'widgets',

        edit: function (props) {
            var content = props.attributes.content;

            function onChangeContent(newContent) {
                props.setAttributes({ content: newContent });
            }

            return el(
                RichText,
                {
                    tagName: 'p',
                    className: props.className,
                    onChange: onChangeContent,
                    value: content,
                }
            );
        },

        save: function (props) {
            var content = props.attributes.content;

            return <div>Hello World, step 1 (from the frontend).</div>;;
        },
    }
);
