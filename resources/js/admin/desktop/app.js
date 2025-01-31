import {burgerButton} from './burger-button.js';
import {filterBar} from './filter-bar.js';
import {tabBar} from './tab.js';
import {sumeRest} from './sume-rest.js';
import {notify} from './notify.js';
import {form} from './form.js';
import {renderCkeditor} from './ckeditor.js';
import{renderFaqs} from './faqs.js';
import{imageContent} from './image-content.js';
import {renderTable} from './table.js';
import { renderModalDelete } from './modal-delete.js';
import { errorsFormMessage } from './errorsFormMessage.js';

burgerButton();
filterBar();
tabBar();
sumeRest();
notify();
form();
renderCkeditor();
renderFaqs();
imageContent();
renderTable();
renderModalDelete();
errorsFormMessage();