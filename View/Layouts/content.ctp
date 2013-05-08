<?php
    if (isset($redirect)) {
        switch ($redirect) {
            case 'close':
                echo $this->Html->scriptBlock("window.common.modal.close();");
                break;
            case 'refresh':
                echo $this->Html->scriptBlock("window.common.reload();");
                break;
        }
    } else {
        $out = array(

            $this->fetch('css'),

            $this->Js->writeBuffer(array('onDomReady' => true)),
            $this->fetch('script'),

            $this->fetch('content'),

            $this->Html->scriptBlock(
                "window.common.title('" . $this->fetch('title') . "');"
            )
        );
        $out = $this->Common->autoInclude($out);
        echo implode($out);
    }

