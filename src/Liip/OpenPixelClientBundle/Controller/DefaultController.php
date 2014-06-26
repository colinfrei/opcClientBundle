<?php

namespace Liip\OpenPixelClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $opcClient = $this->container->get('liip_open_pixel_client.opc_client');
        for ($i = 1; $i <=50000; $i++) {
            $opcClient->setFullColor(50, 0, 0);

            $opcClient->setPixel(2, 2, array(0, 255, 0));
            $opcClient->setPixel(2, 3, array(0, 255, 0));
            $opcClient->setPixel(2, 4, array(0, 255, 0));
            $opcClient->setPixel(2, 5, array(0, 255, 0));
            $opcClient->setPixel(2, 6, array(0, 255, 0));
            $opcClient->setPixel(2, 7, array(0, 255, 0));
            $opcClient->setPixel(2, 8, array(0, 255, 0));
            $opcClient->setPixel(2, 9, array(0, 255, 0));
            $opcClient->setPixel(2, 10, array(0, 255, 0));
            $opcClient->setPixel(2, 11, array(0, 255, 0));
            $opcClient->setPixel(2, 12, array(0, 255, 0));
            $opcClient->setPixel(2, 13, array(0, 255, 0));
            $opcClient->setPixel(2, 14, array(0, 255, 0));
            $opcClient->setPixel(2, 15, array(0, 255, 0));
            $opcClient->setPixel(3, 15, array(0, 255, 0));
            $opcClient->setPixel(4, 15, array(0, 255, 0));
            $opcClient->setPixel(5, 15, array(0, 255, 0));
            $opcClient->setPixel(6, 15, array(0, 255, 0));

            $opcClient->setPixel(8, 15, array(0, 255, 0));
            $opcClient->setPixel(8, 14, array(0, 255, 0));
            $opcClient->setPixel(9, 12, array(0, 255, 0));
            $opcClient->setPixel(9, 13, array(0, 255, 0));
            $opcClient->setPixel(10, 10, array(0, 255, 0));
            $opcClient->setPixel(10, 11, array(0, 255, 0));
            $opcClient->setPixel(11, 9, array(0, 255, 0));
            $opcClient->setPixel(11, 8, array(0, 255, 0));
            $opcClient->setPixel(12, 7, array(0, 255, 0));
            $opcClient->setPixel(12, 6, array(0, 255, 0));
            $opcClient->setPixel(13, 5, array(0, 255, 0));
            $opcClient->setPixel(14, 4, array(0, 255, 0));
            $opcClient->setPixel(14, 3, array(0, 255, 0));

            $opcClient->setPixel(15, 15, array(0, 255, 0));
            $opcClient->setPixel(15, 14, array(0, 255, 0));
            $opcClient->setPixel(16, 12, array(0, 255, 0));
            $opcClient->setPixel(16, 13, array(0, 255, 0));
            $opcClient->setPixel(17, 10, array(0, 255, 0));
            $opcClient->setPixel(17, 11, array(0, 255, 0));
            $opcClient->setPixel(18, 9, array(0, 255, 0));
            $opcClient->setPixel(18, 8, array(0, 255, 0));
            $opcClient->setPixel(19, 7, array(0, 255, 0));
            $opcClient->setPixel(19, 6, array(0, 255, 0));
            $opcClient->setPixel(20, 5, array(0, 255, 0));
            $opcClient->setPixel(21, 4, array(0, 255, 0));
            $opcClient->setPixel(21, 3, array(0, 255, 0));

            $opcClient->setPixel(22, 2, array(0, 255, 0));
            $opcClient->setPixel(22, 3, array(0, 255, 0));
            $opcClient->setPixel(22, 4, array(0, 255, 0));
            $opcClient->setPixel(22, 5, array(0, 255, 0));
            $opcClient->setPixel(22, 6, array(0, 255, 0));
            $opcClient->setPixel(22, 7, array(0, 255, 0));
            $opcClient->setPixel(22, 8, array(0, 255, 0));
            $opcClient->setPixel(22, 9, array(0, 255, 0));
            $opcClient->setPixel(22, 10, array(0, 255, 0));
            $opcClient->setPixel(22, 11, array(0, 255, 0));
            $opcClient->setPixel(22, 12, array(0, 255, 0));
            $opcClient->setPixel(22, 13, array(0, 255, 0));
            $opcClient->setPixel(22, 14, array(0, 255, 0));
            $opcClient->setPixel(22, 15, array(0, 255, 0));
            $opcClient->setPixel(23, 2, array(0, 255, 0));
            $opcClient->setPixel(24, 2, array(0, 255, 0));
            $opcClient->setPixel(25, 2, array(0, 255, 0));
            $opcClient->setPixel(26, 2, array(0, 255, 0));
            $opcClient->setPixel(27, 3, array(0, 255, 0));
            $opcClient->setPixel(28, 4, array(0, 255, 0));
            $opcClient->setPixel(28, 5, array(0, 255, 0));
            $opcClient->setPixel(27, 6, array(0, 255, 0));
            $opcClient->setPixel(26, 7, array(0, 255, 0));
            $opcClient->setPixel(25, 8, array(0, 255, 0));
            $opcClient->setPixel(24, 8, array(0, 255, 0));
            $opcClient->setPixel(23, 8, array(0, 255, 0));

            //$opc->setPixel(1, 1, array(100, 255, 100))->sendToScreen();
            usleep(10000);
        }

        $opcClient->closeSockets();

        return null;
    }
}

