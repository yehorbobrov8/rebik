<?php

use Mockery as m;

class TestModel extends \Illuminate\Database\Eloquent\Model {}
class OtherTestModel extends \Illuminate\Database\Eloquent\Model {}

abstract class TestModelConfiguration implements \SleepingOwl\Admin\Contracts\ModelConfigurationInterface, \SleepingOwl\Admin\Contracts\Initializable {}

class AdminTest extends TestCase
{
    /**
     * @var SleepingOwl\Admin\Admin
     */
    private $admin;

    public function setUp()
    {
        parent::setUp();

        $this->admin = new SleepingOwl\Admin\Admin();
    }

    /**
     * @covers SleepingOwl\Admin\Admin::registerModel
     * @covers SleepingOwl\Admin\Admin::getModels
     */
    public function test_registers_models()
    {
        $this->admin->registerModel(TestModel::class, function () { });
        $this->assertCount(1, $this->admin->getModels());

        $this->admin->registerModel(TestModel::class, function () { });
        $this->assertCount(1, $this->admin->getModels());

        $this->admin->registerModel(OtherTestModel::class, function () { });
        $this->assertCount(2, $this->admin->getModels());
    }

    /**
     * @covers SleepingOwl\Admin\Admin::register
     * @covers SleepingOwl\Admin\Admin::getModels
     */
    public function test_register_configuration()
    {
        $configuration = $this->getMock(\SleepingOwl\Admin\Contracts\ModelConfigurationInterface::class);
        $configuration->expects($this->once())->method('getClass')->will($this->returnValue(TestModel::class));

        $this->admin->register($configuration);

        $configuration1 = $this->getMock(TestModelConfiguration::class);
        $configuration1->expects($this->once())->method('getClass')->will($this->returnValue(OtherTestModel::class));
        $configuration1->expects($this->once())->method('initialize');

        $this->admin->register($configuration1);

        $configuration2 = $this->getMock(TestModelConfiguration::class);
        $configuration2->expects($this->once())->method('getClass')->will($this->returnValue(TestModel::class));
        $this->admin->register($configuration2);

        $this->assertCount(2, $this->admin->getModels());
    }

    /**
     * @covers SleepingOwl\Admin\Admin::modelAliases
     * @covers SleepingOwl\Admin\Admin::getModels
     */
    public function test_returns_form_aliases()
    {
        $this->admin->registerModel(TestModel::class, function () { });
        $aliases = $this->admin->modelAliases();

        $this->assertEquals('test_models', $aliases['TestModel']);
    }

    /**
     * @covers SleepingOwl\Admin\Admin::getModel
     */
    public function test_gets_model()
    {
        $configuration = $this->getMock(\SleepingOwl\Admin\Contracts\ModelConfigurationInterface::class);
        $configuration->expects($this->once())->method('getClass')->will($this->returnValue(TestModel::class));

        $this->admin->register($configuration);

        $model = $this->admin->getModel(TestModel::class);
        $this->assertEquals($configuration, $model);

        $model = $this->admin->getModel(new TestModel());
        $this->assertEquals($configuration, $model);

        $model = $this->admin->getModel(OtherTestModel::class);

        $this->assertInstanceOf(
            \SleepingOwl\Admin\Contracts\ModelConfigurationInterface::class,
            $model
        );
    }

    /**
     * @covers SleepingOwl\Admin\Admin::setModel
     */
    public function test_set_model()
    {
        $configuration = $this->getMock(\SleepingOwl\Admin\Contracts\ModelConfigurationInterface::class);

        $this->admin->setModel(TestClass::class, $configuration);
        $this->assertCount(1, $this->admin->getModels());
    }

    /**
     * @covers SleepingOwl\Admin\Admin::hasModel
     */
    public function test_checks_if_has_model()
    {
        $this->admin->registerModel(TestModel::class, function () { });
        $this->assertTrue($this->admin->hasModel(TestModel::class));
        $this->assertFalse($this->admin->hasModel(OtherTestModel::class));
    }

    /**
     * @covers SleepingOwl\Admin\Admin::template
     */
    public function test_returns_template()
    {
        $this->assertInstanceOf(
            \SleepingOwl\Admin\Contracts\TemplateInterface::class,
            $this->admin->template()
        );
    }

    /**
     * @covers SleepingOwl\Admin\Admin::addMenuPage
     */
    public function test_adds_menu_page()
    {
        $navigation = m::mock(\SleepingOwl\Admin\Navigation::class);
        $this->app->instance('sleeping_owl.navigation', $navigation);
        $navigation->shouldReceive('addPage')->once();

        $this->admin->addMenuPage(TestModel::class);
    }

    /**
     * @covers SleepingOwl\Admin\Admin::getNavigation
     */
    public function test_get_navigation()
    {
        $navigation = m::mock(\SleepingOwl\Admin\Navigation::class);
        $this->app->instance('sleeping_owl.navigation', $navigation);

        $this->assertInstanceOf(
            \SleepingOwl\Admin\Navigation::class,
            $this->admin->getNavigation()
        );
    }

    /**
     * @covers SleepingOwl\Admin\Admin::view
     */
    public function test_renders_view()
    {
        $arguments = ['content', 'title'];
        $controllerClass = \SleepingOwl\Admin\Http\Controllers\AdminController::class;

        $controller = m::mock($controllerClass);
        $this->app->instance($controllerClass, $controller);
        $controller->shouldReceive('renderContent')
                   ->withArgs($arguments)
                   ->once();

        $this->admin->view($arguments[0], $arguments[1]);
    }
}