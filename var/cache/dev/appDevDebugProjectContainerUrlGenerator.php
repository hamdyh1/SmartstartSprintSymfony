<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = [
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'complaints_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ComplaintsBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Complaints/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addComplaint_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ComplaintsBundle\\Controller\\DefaultController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Complaints/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'addComplaint2_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ComplaintsBundle\\Controller\\DefaultController::add2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Complaints/add2',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'afficher_complaint' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ComplaintsBundle\\Controller\\DefaultController::afficherAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Complaints/afficher',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'remove_complaint' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ComplaintsBundle\\Controller\\DefaultController::removeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Complaints/remove',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_listPosts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PostController::ListpostsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Posts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Admin_deletePost' => array (  0 =>   array (    0 => 'postId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PostController::DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postId',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/deletepost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Admin_UpdatePost' => array (  0 =>   array (    0 => 'postId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PostController::UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postId',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/UpdatePost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Admin_DetailPost' => array (  0 =>   array (    0 => 'postId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\PostController::DetailPostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postId',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/DetailPost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_listComments' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CommentController::ListCommentsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Comments',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Admin_deleteComment' => array (  0 =>   array (    0 => 'commentId',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\CommentController::DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    1 =>     array (      0 => 'text',      1 => '/Admin/deletecomment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Admin_PaymentsBlogList' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminBlogProfitsController::listPaymentsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/paymentBlog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Admin_PaymentsBlogListAccept' => array (  0 =>   array (    0 => 'id',    1 => 'idpayment',  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\AdminBlogProfitsController::AcceptPaymentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idpayment',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/Admin/AcceptPayment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Admin_Redirection' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AdminBundle\\Controller\\SecurityController::redirectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Admin/Verify',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_detailblog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\DefaultController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_AddBlogPost' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogPostsController::AddBlogPostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/AddPost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_delete' => array (  0 =>   array (    0 => 'postId',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogPostsController::DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postId',    ),    1 =>     array (      0 => 'text',      1 => '/blog/deletepost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_ListPosts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogPostsController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/listposts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_Detail' => array (  0 =>   array (    0 => 'postId',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogPostsController::DetailPostAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postId',    ),    1 =>     array (      0 => 'text',      1 => '/blog/DetailPost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_Managment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogPostsController::ManagerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/BlogManager',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_Like' => array (  0 =>   array (    0 => 'postId',    1 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogPostsController::LikeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postId',    ),    2 =>     array (      0 => 'text',      1 => '/blog/Like',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Update_BlogPost' => array (  0 =>   array (    0 => 'postId',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogPostsController::UpdateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postId',    ),    1 =>     array (      0 => 'text',      1 => '/blog/UpdatePost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Blog_PostCat' => array (  0 =>   array (    0 => 'cat',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogPostsController::PostsByCatAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'cat',    ),    1 =>     array (      0 => 'text',      1 => '/blog/PostCat',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_AddComment' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CommentsController::AddCommentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/AddComment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_deleteComment' => array (  0 =>   array (    0 => 'commentId',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CommentsController::DeleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'commentId',    ),    1 =>     array (      0 => 'text',      1 => '/blog/deleteComment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_Profits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\BlogProfitsController::AddEntryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/Profit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'opportunity_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OpportunityBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/opportunity/home',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'opportunity_detailblog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'OpportunityBundle\\Controller\\DefaultController::detailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/opportunity/detail',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Verify' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::redirectAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Verify',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.security.controller:logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.profile.controller:editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.registration.controller:confirmedAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:requestAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:sendEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:checkEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'fos_user.resetting.controller:resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'fos_user.change_password.controller:changePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_contracts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contract/myContracts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_contract' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\DefaultController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contract/contract/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_low_contracts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\DefaultController::lowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contract/myLowContracts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_contract' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\DefaultController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/contract/contract/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'freelancer_contracts' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ContractBundle\\Controller\\DefaultController::freelancerContractsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contract/freelancerContracts',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_list' => array (  0 =>   array (    0 => 'notifiable',  ),  1 =>   array (    '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notifiable',    ),    1 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_mark_as_seen' => array (  0 =>   array (    0 => 'notifiable',    1 => 'notification',  ),  1 =>   array (    '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsSeenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notification',    ),    1 =>     array (      0 => 'text',      1 => '/mark_as_seen',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notifiable',    ),    3 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_mark_as_unseen' => array (  0 =>   array (    0 => 'notifiable',    1 => 'notification',  ),  1 =>   array (    '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAsUnSeenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notification',    ),    1 =>     array (      0 => 'text',      1 => '/mark_as_unseen',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notifiable',    ),    3 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'notification_mark_all_as_seen' => array (  0 =>   array (    0 => 'notifiable',  ),  1 =>   array (    '_controller' => 'Mgilet\\NotificationBundle\\Controller\\NotificationController::markAllAsSeenAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/markAllAsSeen',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'notifiable',    ),    2 =>     array (      0 => 'text',      1 => '/notifications',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    ];
        }
    }

    public function generate($name, $parameters = [], $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
