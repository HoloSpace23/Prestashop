<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 */

namespace PrestaShop\PrestaShop\Core\Domain\AttributeGroup\Exception;

/**
 * When attribute group Id contains invalid values
 */
class AttributeGroupConstraintException extends AttributeGroupException
{
    /**
     * Used when attribute group id is invalid
     */
    public const INVALID_ID = 10;

    /**
     * Code is used when attribute group does not have name.
     */
    public const EMPTY_NAME = 20;

    /**
     * Code is used when attribute group does not have public name.
     */
    public const EMPTY_PUBLIC_NAME = 30;

    /**
     * Used when attribute group name is invalid.
     */
    public const INVALID_NAME = 40;

    /**
     * Used when attribute group public name is invalid.
     */
    public const INVALID_PUBLIC_NAME = 50;

    /**
     * Used when attribute group type is invalid.
     */
    public const INVALID_TYPE = 60;
}
