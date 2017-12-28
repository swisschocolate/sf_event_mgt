<?php
namespace DERHANSEN\SfEventMgt\Controller;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * EventController
 *
 * @author Torben Hansen <derhansen@gmail.com>
 */
abstract class AbstractController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * EventRepository
     *
     * @var \DERHANSEN\SfEventMgt\Domain\Repository\EventRepository
     */
    protected $eventRepository = null;

    /**
     * Registration repository
     *
     * @var \DERHANSEN\SfEventMgt\Domain\Repository\RegistrationRepository
     */
    protected $registrationRepository = null;

    /**
     * Category repository
     *
     * @var \DERHANSEN\SfEventMgt\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository = null;

    /**
     * Location repository
     *
     * @var \DERHANSEN\SfEventMgt\Domain\Repository\LocationRepository
     */
    protected $locationRepository = null;

    /**
     * Organisator repository
     *
     * @var \DERHANSEN\SfEventMgt\Domain\Repository\OrganisatorRepository
     */
    protected $organisatorRepository = null;

    /**
     * Notification Service
     *
     * @var \DERHANSEN\SfEventMgt\Service\NotificationService
     */
    protected $notificationService = null;

    /**
     * ICalendar Service
     *
     * @var \DERHANSEN\SfEventMgt\Service\ICalendarService
     */
    protected $icalendarService = null;

    /**
     * Hash Service
     *
     * @var \TYPO3\CMS\Extbase\Security\Cryptography\HashService
     */
    protected $hashService;

    /**
     * RegistrationService
     *
     * @var \DERHANSEN\SfEventMgt\Service\RegistrationService
     */
    protected $registrationService = null;

    /**
     * CalendarService
     *
     * @var \DERHANSEN\SfEventMgt\Service\CalendarService
     */
    protected $calendarService = null;

    /**
     * UtilityService
     *
     * @var \DERHANSEN\SfEventMgt\Service\UtilityService
     */
    protected $utilityService = null;

    /**
     * PaymentMethodService
     *
     * @var \DERHANSEN\SfEventMgt\Service\PaymentService
     */
    protected $paymentService = null;
    
    /**
     * DI for $calendarService
     *
     * @param \DERHANSEN\SfEventMgt\Service\CalendarService $calendarService
     */
    public function injectCalendarService(\DERHANSEN\SfEventMgt\Service\CalendarService $calendarService)
    {
        $this->calendarService = $calendarService;
    }

    /**
     * DI for $categoryRepository
     *
     * @param \DERHANSEN\SfEventMgt\Domain\Repository\CategoryRepository $categoryRepository
     */
    public function injectCategoryRepository(
        \DERHANSEN\SfEventMgt\Domain\Repository\CategoryRepository $categoryRepository
    ) {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * DI for $eventRepository
     *
     * @param \DERHANSEN\SfEventMgt\Domain\Repository\EventRepository $eventRepository
     */
    public function injectEventRepository(\DERHANSEN\SfEventMgt\Domain\Repository\EventRepository $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }

    /**
     * DI for $hashService
     *
     * @param \TYPO3\CMS\Extbase\Security\Cryptography\HashService $hashService
     */
    public function injectHashService(\TYPO3\CMS\Extbase\Security\Cryptography\HashService $hashService)
    {
        $this->hashService = $hashService;
    }

    /**
     * DI for $icalendarService
     *
     * @param \DERHANSEN\SfEventMgt\Service\ICalendarService $icalendarService
     */
    public function injectIcalendarService(\DERHANSEN\SfEventMgt\Service\ICalendarService $icalendarService)
    {
        $this->icalendarService = $icalendarService;
    }

    /**
     * DI for $locationRepository
     *
     * @param \DERHANSEN\SfEventMgt\Domain\Repository\LocationRepository $locationRepository
     */
    public function injectLocationRepository(
        \DERHANSEN\SfEventMgt\Domain\Repository\LocationRepository $locationRepository
    ) {
        $this->locationRepository = $locationRepository;
    }

    /**
     * DI for $notificationService
     *
     * @param \DERHANSEN\SfEventMgt\Service\NotificationService $notificationService
     */
    public function injectNotificationService(\DERHANSEN\SfEventMgt\Service\NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    /**
     * DI for $organisatorRepository
     *
     * @param \DERHANSEN\SfEventMgt\Domain\Repository\OrganisatorRepository $organisatorRepository
     */
    public function injectOrganisatorRepository(
        \DERHANSEN\SfEventMgt\Domain\Repository\OrganisatorRepository $organisatorRepository
    ) {
        $this->organisatorRepository = $organisatorRepository;
    }

    /**
     * DI for $paymentService
     *
     * @param \DERHANSEN\SfEventMgt\Service\PaymentService $paymentService
     */
    public function injectPaymentService(\DERHANSEN\SfEventMgt\Service\PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * DI for $registrationRepository
     *
     * @param \DERHANSEN\SfEventMgt\Domain\Repository\RegistrationRepository $registrationRepository
     */
    public function injectRegistrationRepository(
        \DERHANSEN\SfEventMgt\Domain\Repository\RegistrationRepository $registrationRepository
    ) {
        $this->registrationRepository = $registrationRepository;
    }

    /**
     * DI for $registrationService
     *
     * @param \DERHANSEN\SfEventMgt\Service\RegistrationService $registrationService
     */
    public function injectRegistrationService(\DERHANSEN\SfEventMgt\Service\RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }

    /**
     * DI for $utilityService
     *
     * @param \DERHANSEN\SfEventMgt\Service\UtilityService $utilityService
     */
    public function injectUtilityService(\DERHANSEN\SfEventMgt\Service\UtilityService $utilityService)
    {
        $this->utilityService = $utilityService;
    }
}
