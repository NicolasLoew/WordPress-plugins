
( function ( blocks, element, blockEditor ) {
    const el = element.createElement,
        registerBlockType = blocks.registerBlockType,
        ServerSideRender = PgServerSideRender,
        InspectorControls = blockEditor.InspectorControls,
        useBlockProps = blockEditor.useBlockProps;
        
    const {__} = wp.i18n;
    const {ColorPicker, TextControl, ToggleControl, SelectControl, Panel, PanelBody, Disabled, TextareaControl, BaseControl} = wp.components;
    const {useSelect} = wp.data;
    const {RawHTML, Fragment} = element;
   
    const {InnerBlocks, URLInputButton, RichText} = wp.blockEditor;
    const useInnerBlocksProps = blockEditor.useInnerBlocksProps || blockEditor.__experimentalUseInnerBlocksProps;
    
    const propOrDefault = function(val, prop, field) {
        if(block.attributes[prop] && (val === null || val === '')) {
            return field ? block.attributes[prop].default[field] : block.attributes[prop].default;
        }
        return val;
    }
    
    const block = registerBlockType( 'ympkers-custom-blocks/myblock', {
        apiVersion: 2,
        title: 'My Block Title',
        icon: 'id',
        category: 'text',
        keywords: [],
        supports: {color: {background: false,text: false,gradients: false,link: false,},typography: {fontSize: false,},anchor: false,align: false,},
        attributes: {
        },
        example: { attributes: {  } },
        edit: function ( props ) {
            const blockProps = useBlockProps({ className: 'fancy-block pb-5 pt-5' });
            const setAttributes = props.setAttributes; 
            
            
            const innerBlocksProps = null;
            
            
            return el(Fragment, {}, [
                el('section', { ...blockProps }, el('div', { className: 'container pb-5 pt-5' }, el('div', { className: 'align-items-center gy-4 row' }, [el('div', { className: 'col-lg-4' }, el('img', { src: 'https://images.unsplash.com/photo-1613909207039-6b173b755cc1?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDV8fGRlc2lnbmVyfGVufDB8fHx8MTYzMjg2OTMwMA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=800&h=1000&fit=crop', className: 'img-fluid rounded-1 shadow-sm w-100', alt: '...', width: '600', height: '650' })), el('div', { className: 'col-lg-8' }, [el('h3', { className: 'fw-bold h1 mb-3 text-capitalize text-primary' }, 'About Me'), el('p', { className: 'mb-4' }, 'Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est.'), el('div', { className: 'g-3 mb-4 row' }, [el('div', { className: 'col-md-4' }, el('div', { className: 'bg-light h-100 p-4 rounded-1 shadow-sm' }, [el('h4', { className: 'display-4 fw-bold text-primary' }, '10+'), el('p', { className: 'fw-bold h6 text-secondary' }, 'Years of Experience')])), el('div', { className: 'col-md-4' }, el('div', { className: 'bg-light h-100 p-4 rounded-1 shadow-sm' }, [el('h4', { className: 'display-4 fw-bold text-primary' }, '200+'), el('p', { className: 'fw-bold h6 text-secondary' }, 'Projects Completed')])), el('div', { className: 'col-md-4' }, el('div', { className: 'bg-light h-100 p-4 rounded-1 shadow-sm' }, [el('h4', { className: 'display-4 fw-bold text-primary' }, '12'), el('p', { className: 'fw-bold h6 text-secondary' }, 'Industry Awards')]))]), el('a', { href: '#', className: 'btn btn-primary pe-4 ps-4' }, 'Full Story')])]))),                        
                
            ]);
        },

        save: function(props) {
            const blockProps = useBlockProps.save({ className: 'fancy-block pb-5 pt-5' });
            return el('section', { ...blockProps }, el('div', { className: 'container pb-5 pt-5' }, el('div', { className: 'align-items-center gy-4 row' }, [el('div', { className: 'col-lg-4' }, el('img', { src: 'https://images.unsplash.com/photo-1613909207039-6b173b755cc1?ixid=MnwyMDkyMnwwfDF8c2VhcmNofDV8fGRlc2lnbmVyfGVufDB8fHx8MTYzMjg2OTMwMA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=800&h=1000&fit=crop', className: 'img-fluid rounded-1 shadow-sm w-100', alt: '...', width: '600', height: '650' })), el('div', { className: 'col-lg-8' }, [el('h3', { className: 'fw-bold h1 mb-3 text-capitalize text-primary' }, 'About Me'), el('p', { className: 'mb-4' }, 'Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pulvinar faucibus neque, nec rhoncus nunc ultrices sit amet. Curabitur ac sagittis neque, vel egestas est.'), el('div', { className: 'g-3 mb-4 row' }, [el('div', { className: 'col-md-4' }, el('div', { className: 'bg-light h-100 p-4 rounded-1 shadow-sm' }, [el('h4', { className: 'display-4 fw-bold text-primary' }, '10+'), el('p', { className: 'fw-bold h6 text-secondary' }, 'Years of Experience')])), el('div', { className: 'col-md-4' }, el('div', { className: 'bg-light h-100 p-4 rounded-1 shadow-sm' }, [el('h4', { className: 'display-4 fw-bold text-primary' }, '200+'), el('p', { className: 'fw-bold h6 text-secondary' }, 'Projects Completed')])), el('div', { className: 'col-md-4' }, el('div', { className: 'bg-light h-100 p-4 rounded-1 shadow-sm' }, [el('h4', { className: 'display-4 fw-bold text-primary' }, '12'), el('p', { className: 'fw-bold h6 text-secondary' }, 'Industry Awards')]))]), el('a', { href: '#', className: 'btn btn-primary pe-4 ps-4' }, 'Full Story')])])));
        }                        

    } );
} )(
    window.wp.blocks,
    window.wp.element,
    window.wp.blockEditor
);                        
