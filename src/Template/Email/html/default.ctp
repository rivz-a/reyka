<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
$content = $this->request->getData();
echo '<h2>Получена заявка с сайта rul-reika.ru</h2>';

//$content = explode("\n", $content);


echo '<p>Имя: ' . $content['name'] . '</p>';
echo '<p>Телефон: ' . $content['tel'] . '</p>';
echo '<p>Причина обращения: ' . $content['send'] . '</p>'; 

/*foreach ($content as $line) :
    echo '<p> ' . $line . "</p>\n";
endforeach;
*/