<?php

/**
 * \AppserverIo\Appserver\Core\Api\Node\SecurityRoleNodeInterface
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/appserver
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Appserver\Core\Api\Node;

use AppserverIo\Configuration\Interfaces\NodeInterface;

/**
 * Interface for a security role DTO implementation.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io/appserver
 * @link      http://www.appserver.io
 */
interface SecurityRoleNodeInterface extends NodeInterface
{

    /**
     * Return's the role name information.
     *
     * @return \AppserverIo\Appserver\Core\Api\Node\RoleNameNode The web resource name information
     */
    public function getRoleName();

    /**
     * Return's the description information.
     *
     * @return \AppserverIo\Appserver\Core\Api\Node\DescriptionNode The description information
     */
    public function getDescription();
}
