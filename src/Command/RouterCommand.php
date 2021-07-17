<?php

declare(strict_types=1);
/**
 * You know, for fast.
 *
 * @link     https://www.open.ctl.pub
 * @document https://doc.open.ctl.pub
 */
namespace FourLi\ApiDriver\Command;

use Hyperf\Command\Command as HyperfCommand;
use Psr\Container\ContainerInterface;
use Symfony\Component\Console\Input\InputOption;

class RouterCommand extends HyperfCommand
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    private $desc = '路由操作';

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;

        parent::__construct('api:router');
    }

    public function configure()
    {
        parent::configure();

        $this->setDescription($this->desc)
            ->addOption('dump', null, InputOption::VALUE_NONE, '打印路由')
            ->setHelp($this->genHelpString());
    }

    public function handle()
    {
        $this->output->title('开始' . $this->desc);

        if ($this->input->getOption('dump')) {
            $this->call('describe:routes');
            return 0;
        }

        $this->line('初始化完成', 'info');
    }

    private function genHelpString()
    {
        return <<<EOF
{$this->desc}
EOF;
    }
}
