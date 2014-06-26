<?php

namespace Liip\OpenPixelClientBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Dumper;

class GeneratePixelMapCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('demo:greet')
            ->setDescription('Greet someone')
            ->addOption(
                'startX',
                InputArgument::REQUIRED,
                'X-Coordinate of the first Pixel'
            )
            ->addOption(
                'startY',
                InputArgument::REQUIRED,
                'Y-Coordinate of the first Pixel'
            )
            ->addOption(
                'pixelsX',
                InputArgument::REQUIRED,
                'Number of pixels on the X-axis'
            )
            ->addOption(
                'pixelsY',
                InputArgument::REQUIRED,
                'Number of pixels on the Y-axis'
            )
            ->addOption(
                'server',
                InputArgument::REQUIRED,
                'The ID of the server of this panel'
            )
            ->addOption(
                'channel',
                InputArgument::REQUIRED,
                'The ID of the channel of this panel'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $startX = $input->getOption('startX');
        $pixelsX = $input->getOption('pixelsX');
        $startY = $input->getOption('startY');
        $pixelsY = $input->getOption('pixelsY');
        $server = $input->getOption('server');
        $channel = $input->getOption('channel');

        $ymlArray = array();
        $lastXPixel = $startX + $pixelsX;
        $lastYPixel = $startY + $pixelsY;
        $position = 0;
        for ($x = $startX; $x < $lastXPixel; $x++) {
            $ymlArray[$x] = array();
            $position += $pixelsY;

            for ($y = $startY; $y < $lastYPixel; $y++) {
                if (!($x % 2)) {
                    $position++;
                }
                $ymlArray[$x][$y] = array($server, $channel, $position);
                if ($x % 2) {
                    $position--;
                }
            }
        }

        $dumper = new Dumper();
        $output->writeln($dumper->dump($ymlArray, 2));
    }
}