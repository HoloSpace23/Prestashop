// Import FO pages
import {TermsAndConditionsOfUsePage} from '@pages/FO/classic/termsAndConditionsOfUse/index';

/**
 * @class
 * @extends FOBasePage
 */
class TermsAndConditionsOfUse extends TermsAndConditionsOfUsePage {
  /**
   * @constructs
   */
  constructor() {
    super('hummingbird');
  }
}

export default new TermsAndConditionsOfUse();
