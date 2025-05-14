# **AdTaxSys: Advertisement Taxation Management System**

## Overview

**AdTaxSys** is an innovative, purpose-built system designed to assist the **Tanzania Revenue Authority (TRA)** in effectively managing the taxation of **billboards** and **promotional advertisements**, including **illuminated and non-illuminated billboards**, as well as **advertising vehicles**. The system streamlines registration, tax calculation, data tracking, and reporting, ensuring transparency, accountability, and operational efficiency.

---

## Problem Statement

TRA currently lacks a **dedicated platform** for managing advertisement taxation. While the existing **Tax Revenue System (TRS v2.0)** allows generation of payment control numbers for taxpayers, it **does not capture or manage details** about the billboard assets themselves.

### Real Operational Gaps:

* No system to register billboard dimensions, types, or locations
* No automation of tax calculations based on asset attributes
* Invoices are created manually using Word or Excel
* No linkage between taxpayer info and advertising assets
* No reporting or tracking of ad-related revenue
* Data is fragmented and hard to audit

---

## Our Solution

**AdTaxSys** directly addresses these challenges by providing a **centralized, web-based system** tailored to the needs of TRA staff. It enables:

* Full registration and digital tracking of billboard and promo assets
* Seamless integration with TRA APIs for taxpayer validation
* Accurate, automated tax calculations
* Structured data storage and historical tracking
* Transparent invoice generation
* Detailed analytics and reporting for informed decision-making

---

## Key Features

* **Billboard Management**
  Register and monitor billboard data: dimensions, type (illuminated/non-illuminated), location, and ownership.

* **Promotional Vehicle Taxation**
  Track and tax mobile ads using promotional vehicles, with location and campaign info.

* **Tax Calculation Engine**
  Automatically computes taxes based on predefined parameters like size, type, and zone/location.

* **TRA System Integration**
  Pull taxpayer details from TRA’s API using the TIN and link them to their assets.

* **Digital Invoicing**
  Instantly generate compliant invoices with control numbers tied to each asset.

* **Reporting & Analytics**
  Generate reports on unpaid taxes, active billboards, revenue summaries, and more.

---

## How It Works

1. **User Inputs Asset Details**
   Staff enters billboard or vehicle data into the system.

2. **Validation & Association**
   System fetches and associates taxpayer info via API.

3. **Tax Computation**
   Automated engine computes tax based on asset specs and location.

4. **Invoice Generation**
   A formal invoice is created and linked to the taxpayer’s profile.

5. **Tracking & Monitoring**
   Assets, payments, and due balances are continuously tracked and reported.

---

## Vision

To provide TRA with a **smart, transparent, and scalable digital solution** for managing advertisement taxation — widening the tax base, reducing revenue loss, and modernizing tax operations across Tanzania.

---

## Origin & Impact

As an intern at TRA, I personally observed the absence of a proper system for managing advertisement taxation. We used Microsoft Word to manually generate invoices, and stored billboard data in scattered documents. I initially developed a small C# desktop app to reduce invoice workload, but it lacked scale and integration.

**AdTaxSys** is the next step — a full-fledged, integrated solution inspired by real-world gaps. It has the potential to **revolutionize how TRA handles outdoor advertising**, leading to higher revenue, better compliance, and improved public service delivery.

---

## License

MIT License — see the `LICENSE` file for details.
