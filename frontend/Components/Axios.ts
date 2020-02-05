import axios from "axios";

const [meta] = document.getElementsByName('csrf-token');
axios.defaults.headers.common['X-CSRF-TOKEN'] = meta.getAttribute('content');

export {axios};
