<?php
use oat\tao\scripts\update\OntologyUpdater;
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright (c) 2014 (original work) Open Assessment Technologies SA;
 *
 *
 */

/**
 * 
 * @author Joel Bout <joel@taotesting.com>
 */
class taoLti_scripts_update_Updater extends \common_ext_ExtensionUpdater
{

    /**
     * 
     * @param string $currentVersion
     * @return string $versionUpdatedTo
     */
    public function update($initialVersion)
    {
        $this->skip('0', '1.2');
        
        if ($this->isVersion('1.2')) {
            OntologyUpdater::syncModels();
            $this->setVersion('1.3.0');
        }

        $this->skip('1.3.0', '1.5.2');
        
        // add teacher assistant role
        if ($this->isVersion('1.5.2')) {
            OntologyUpdater::syncModels();
            $this->setVersion('1.6.0');
        }
        $this->skip('1.6.0', '1.9.0');
    }
}
