<?php

namespace Drupal\Tests\formation1\Functional;

use Drupal\Core\Url;
use Drupal\Tests\BrowserTestBase;

/**
 * Test description.
 *
 * @group formation1
 */
class BrowserExampleTest extends BrowserTestBase {

  protected $defaultTheme = 'classy';

  /**
   * {@inheritdoc}
   */
  public static $modules = ['formation1'];

  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();
    // Set up the test here.
  }

  /**
   * Test callback.
   */
  public function noTestAdminContent() {
    $admin_user = $this->drupalCreateUser(['access administration pages']);
    $this->drupalLogin($admin_user);
    $this->drupalGet('admin/content');
    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('Content');
    $title = $this->getSession()->getPage()->find('css','h1')->getText();
    $this->assertStringContainsString('Content', $title, 'title must welcome user');
  }
  /**
   * Test callback.
   */
  public function testCreateNode() {
    $author_user = $this->drupalCreateUser(['access administration pages']);
    $this->drupalLogin($author_user);

    $this->drupalGet('node/add/article');
    $this->assertSession()->pageTextContains('Create Article');
    $this->assertSession()->buttonExists('save');
    $page = $this->getSession()->getPage();
    $page->fillField('Title', 'un titre');
    $page->fillField('Body', 'lorem ipsum');
    $page->pressButton('save');

    $this->assertSession()->statusCodeEquals(200);
    $this->assertSession()->pageTextContains('un titre');
  }

}
