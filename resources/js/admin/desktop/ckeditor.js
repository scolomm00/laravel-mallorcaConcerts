import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

export let renderCkeditor = () => {


  window.editors = {};
  document.querySelectorAll('.ckeditor').forEach((node, index) => {
    ClassicEditor.
    create(node, {}).
    then(newEditor => {
      window.editors[index] = newEditor;
    });
  });
}