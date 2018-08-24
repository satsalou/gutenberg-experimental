// Step 01
//
// var el = wp.element.createElement,
//     registerBlockType = wp.blocks.registerBlockType,
//     blockStyle = { backgroundColor: '#900', color: '#fff', padding: '20px' };
//
// registerBlockType( 'gutenberg-boilerplate-es5/hello-world-step-01', {
//     title: 'Hello World (Step 1)',
//
//     icon: 'universal-access-alt',
//
//     category: 'layout',
//
//     edit: function() {
//         return el( 'p', { style: blockStyle }, 'Hello editor.' );
//     },
//
//     save: function() {
//         return el( 'p', { style: blockStyle }, 'Hello saved content.' );
//     },
// } );

//Step 2
var el = wp.element.createElement,
    registerBlockType = wp.blocks.registerBlockType;

registerBlockType( 'gutenberg-boilerplate-es5/hello-world-step-02', {
    title: 'Hello World (Step 2)',

    icon: 'universal-access-alt',

    category: 'layout',

    edit: function( props ) {
        return el( 'p', { className: props.className }, 'Hello editor.' );
    },

    save: function( props ) {
        return el( 'p', { className: props.className }, 'Hello saved content.' );
    }
} );
