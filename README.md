# magento2-custom-modules
Custom Modules for Magento2

1) To override Category page through Layout Update XML:

Add the following xml code to 'Layout Update XML' field of Category Edit Page

<referenceBlock name='category.products.list'>
    <action method='setTemplate'>
        <argument name='template' xsi:type='string'>Namespace_Module::list.phtml</argument>
    </action>
</referenceBlock>



The file list.phtml should reside in /app/code/Namespace/Module/view/frontend/templates/list.phtml
