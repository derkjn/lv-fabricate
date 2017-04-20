/* eslint-disable global-require */
import { Common } from '../util/common';
require("imports-loader?define=>false!datatables.net")(window, $);
require("imports-loader?define=>false!datatables.net-bs")(window, $);
import '../../../../node_modules/datatables.net-bs/css/dataTables.bootstrap.css';
export default {
  init() {
    Common.initPace();
    Common.scrollDown();
    Common.backgroundLazyload();
    $('.prices-table').DataTable({
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
