<?php $__env->startSection('styles'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <!-- Page title -->
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
        <div class="page-loading active text-indigo">
          <div class="page-loading-inner">
            <div class="page-spinner"></div><span></span>
          </div>
        </div>
        <div class="modal fade" id="createTag" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Konan Tag</h5>
              </div>
              <form class="form w-100" action="https://nothingdevelopers.xyz/konan/user/tag/create" method="post" id="kt_sign_up_form" novalidate="novalidate">
                <input type="hidden" name="_token" value="SkYqSsgrzHblAwQrhN442bnTV5cx7TEEwTTe3OGc">          <div class="modal-body">
                  <p>Your username for receiving money on Konan</p>
                  <div class="fv-row mb-6">
                    <div class="input-group mb-3">
                      <span class="input-group-text border-0">@</span>
                      <input class="form-control form-control-lg form-control-solid slug_username text-lowercase" maxlength="25" value="" type="text" name="tag" placeholder="Username" required onkeypress="return AvoidSpace(event);" onblur="this.value=removeSpaces(this.value);" onmouseout="this.value=removeSpaces(this.value);" required />
                    </div>
                    <p class="form-text" id="message" style="display: none;"></p>
                                </div>
                </div>
      
                <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" disabled id="username_button">Save changes</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="d-flex flex-column flex-root">
          <div class="page d-flex flex-row flex-column-fluid">
            <div id="kt_aside" class="aside aside-default bg-white aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
              <div class="aside-logo flex-column-auto pt-9 pb-5" id="kt_aside_logo">
                <a href="https://nothingdevelopers.xyz/konan">
                  <img alt="Logo" src="https://nothingdevelopers.xyz/konan/public/asset/images/logo.png" class="logo-default" style="height:auto; max-width:30%;"/>
                  <img alt="Logo" src="https://nothingdevelopers.xyz/konan/public/asset/images/logo.png" class="h-50px logo-minimize" style="height:auto; max-width:30%;"/>
                </a>
              </div>
              <div class="aside-menu flex-column-fluid">
                <div class="menu menu-column menu-fit menu-rounded menu-title-dark menu-icon-dark menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 my-5 mt-lg-2 mb-lg-0" id="kt_aside_menu" data-kt-menu="true">
                  <div class="menu-fit hover-scroll-y me-lg-n5 pe-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="20px" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer">
                    <div class="menu-item"><!--begin:Menu link-->
                      <a class="menu-link  active " href="https://nothingdevelopers.xyz/konan/user/dashboard">
                        <span class="menu-icon"><!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                          <i class="fal fa-home fs-3"></i>
                        </span>
                        <span class="menu-title">Dashboard</span>
                      </a>
                    </div>
                    <div class="menu-item"><!--begin:Menu link-->
                      <a class="menu-link " href="https://nothingdevelopers.xyz/konan/user/card/all">
                        <span class="menu-icon"><!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                          <i class="fal fa-credit-card-front fs-3"></i>
                        </span>
                        <span class="menu-title">Cards</span>
                      </a>
                    </div>
                    <div class="menu-item"><!--begin:Menu link-->
                      <a class="menu-link " href="https://nothingdevelopers.xyz/konan/user/transactions">
                        <span class="menu-icon"><!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                          <i class="fal fa-heart-rate fs-3"></i>
                        </span>
                        <span class="menu-title">Transactions</span>
                      </a>
                    </div>
                    <div class="menu-item"><!--begin:Menu link-->
                      <a class="menu-link " href="https://nothingdevelopers.xyz/konan/user/beneficiary/all">
                        <span class="menu-icon"><!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                          <i class="fal fa-users fs-3"></i>
                        </span>
                        <span class="menu-title">Beneficiary</span>
                      </a>
                    </div>
                    <div class="menu-item"><!--begin:Menu link-->
                      <a class="menu-link " href="https://nothingdevelopers.xyz/konan/user/profile/index/profile">
                        <span class="menu-icon"><!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                          <i class="fal fa-cog fs-3"></i>
                        </span>
                        <span class="menu-title">Settings</span>
                      </a>
                    </div>
                    <div class="menu-item"><!--begin:Menu link-->
                      <a class="menu-link " href="https://nothingdevelopers.xyz/konan/user/ticket/all">
                        <span class="menu-icon">
                          <i class="fal fa-clipboard-list-check fs-3"></i>
                        </span>
                        <span class="menu-title">Support Ticket</span>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="aside-footer flex-column-auto" id="kt_aside_footer"></div>
            </div>
          </div>
        </div>
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
          <!--begin::Header-->
          <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
            <!--begin::Container-->
            <div class="container-fluid d-flex align-items-stretch justify-content-between">
              <!--begin::Logo bar-->
              <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <!--begin::Logo-->
                <a href="https://nothingdevelopers.xyz/konan" class="d-lg-none">
                  <img alt="Logo" src="https://nothingdevelopers.xyz/konan/public/asset/images/logo.png" style="height:auto; max-width:30%;"/>
                </a>
                <!--end::Logo-->
              </div>
              <!--end::Logo bar-->
              <!--begin::Topbar-->
              <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                <!--begin::Search-->
                <div class="d-flex align-items-stretch">
      
                </div>
                <!--end::Search-->
                <!--begin::Toolbar wrapper-->
                <div class="d-flex align-items-stretch flex-shrink-0">
                  <div wire:id="6cpQa5D6h4oWDr73KOT2" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;6cpQa5D6h4oWDr73KOT2&quot;,&quot;name&quot;:&quot;megaphone&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;42f8ae63&quot;,&quot;data&quot;:{&quot;user&quot;:[],&quot;announcements&quot;:[],&quot;unread&quot;:[],&quot;read&quot;:null,&quot;rules&quot;:{&quot;unread&quot;:&quot;required&quot;,&quot;announcements&quot;:&quot;required&quot;}},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;user&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:&quot;92647996-3b3d-4510-895d-2b1a85d093e0&quot;,&quot;relations&quot;:[&quot;business&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}},&quot;modelCollections&quot;:{&quot;announcements&quot;:{&quot;class&quot;:&quot;Illuminate\\Notifications\\DatabaseNotification&quot;,&quot;id&quot;:[&quot;df5a7088-0760-4142-9e0b-93da7339444a&quot;,&quot;42aaa864-4fed-4041-b3f1-40d679a026da&quot;,&quot;4a2f28ed-6fe4-48ed-8bd4-a8fbc05d7b81&quot;,&quot;cb92cd01-0935-4806-ab89-a302a18fd0fd&quot;,&quot;7ff7700e-9b59-42ba-a805-1737bf92bb7b&quot;,&quot;f5df54d9-4b66-4407-ac25-ff0663070e59&quot;,&quot;b2a1ac86-bc0b-4d26-af5b-131e6313612c&quot;,&quot;13b87cac-c9b9-4871-97d9-9d020adc481b&quot;,&quot;548bc0b5-0dc1-4ea3-9a94-4faed335fdd0&quot;,&quot;01a2d641-c753-4bca-987a-1855a0b6125b&quot;,&quot;0a82d5e2-ecbe-4014-b713-67b62f44ba62&quot;,&quot;ce71bd18-0422-4c72-ba0e-c70922063b4d&quot;,&quot;55da2b00-507c-41b6-b67f-0e62a84ff405&quot;,&quot;6cef7e45-7af4-47d3-9bcb-47c4d55c64c4&quot;,&quot;20d5ddaa-6c97-4373-9f61-547a80a6f712&quot;,&quot;3a084638-76ba-41ee-bb2b-9540dc967c1e&quot;,&quot;53c2d44a-2ec4-4974-a4c4-91747f6b257b&quot;,&quot;308fe6f8-d2d4-46ad-aa1c-9146b7a7b8ca&quot;,&quot;5e9e9cec-69e6-4954-8398-89d68264e89e&quot;,&quot;4d5243d5-6ca8-4858-9b0b-f17212884a4f&quot;,&quot;cf8af70a-19ce-4e8c-80a6-a29c971c9472&quot;,&quot;a92cd3fa-2125-45e2-a946-4c2c2975489f&quot;,&quot;8f9ae9d3-c95b-4518-aeaa-364d1a8ab50a&quot;,&quot;acac5e69-6471-4f38-8fac-c39956fdb5fb&quot;,&quot;6b9582e6-6175-4b5c-8137-d201e3f4fdce&quot;,&quot;5392352a-612e-4384-8ba0-53907c99ccbb&quot;,&quot;832c9a8b-ae29-4301-906e-d618c9b45038&quot;,&quot;474ba324-9646-4a0a-b01b-7ad8a88f79a8&quot;,&quot;dc7b28be-b66e-42a6-b716-04533d1e33a0&quot;,&quot;24cc2541-9c0d-4e12-bb48-febd85980325&quot;,&quot;191de5fc-fde5-40c4-8320-9634379df1a2&quot;,&quot;6ae0bf97-0904-438d-bc69-5d2dbb24928b&quot;,&quot;9e54f619-9e73-407f-a5f6-2252df8a676c&quot;,&quot;a3b997d5-2826-48b3-8e08-0caf5a8e18dc&quot;,&quot;2282db75-982a-4041-b134-969baa1f58c3&quot;,&quot;58e62640-7e05-4e2f-8024-01c10bd8ea74&quot;,&quot;91c906d2-a9cd-4e7a-9ab2-b149ba0375b8&quot;,&quot;b902be7b-d403-48f8-98f8-0b2525dbb295&quot;,&quot;a4f52365-5190-4cab-ab61-b0c71c3ca145&quot;,&quot;7f1da4a1-0b82-48ec-bea6-4e3d7d80fcd8&quot;,&quot;a1614f6b-3f13-49a2-b8d0-e58ec7b0bdfd&quot;,&quot;9d0d7385-fdd7-49e8-86aa-4ff8491e51bf&quot;,&quot;e3b6c0a3-a5d7-4f56-b968-6fb84c66584c&quot;,&quot;a42e8e54-2735-44ed-b686-ae52eb55424a&quot;,&quot;26ba09d6-3f5b-4df8-9fbe-9f3e6305dc42&quot;,&quot;98a92f4e-0e6e-4a0a-a40c-6fa2c05f7d0c&quot;,&quot;ec7425b0-8972-4969-b4f9-c0c5bac19823&quot;,&quot;f57b1665-dd0b-49d3-8faa-565bc531e026&quot;,&quot;6d62404c-46bc-4f36-9952-a46e72d71927&quot;,&quot;4279b7cf-c676-4e2f-9806-36065c3bbcab&quot;,&quot;86a3382a-e917-4f22-bc94-0f50d46325a2&quot;,&quot;99fbdeaf-de7c-4eb6-92fc-26a1283dcd4f&quot;,&quot;d581ddc0-cb72-4fb6-a807-147f3e3594c3&quot;,&quot;8c38d9c9-1d93-4faf-8c35-c677190b4a09&quot;,&quot;df38ba81-0b76-4b03-bf51-757ad4d8b8e7&quot;,&quot;6e255c61-4245-457e-8ff8-8b3d3f7cd601&quot;,&quot;b5427962-5f35-4a2a-921f-e19e02d8e961&quot;,&quot;6c0ffbf3-3752-4fd3-b546-05ccf6e20634&quot;,&quot;496136da-6b1f-42f1-86dd-298bf6b8c121&quot;,&quot;33c5bdd3-569d-4a01-89c0-f80c2ff38cc9&quot;,&quot;99e20581-3ede-4f8c-a5db-6ed84843e778&quot;,&quot;afb65c90-1bca-49cb-b395-d149322d47ec&quot;,&quot;f5666b9a-1fdc-4a73-90b1-81015fb9cb08&quot;,&quot;b0abf49b-fa81-430a-bc33-05da2a9e6f15&quot;,&quot;f63a61ea-7521-485a-9375-c413b942fc6f&quot;,&quot;8b2df270-b726-42fd-adc3-58a002db6873&quot;,&quot;07948a43-ce54-4d28-acb6-8e43a2293af8&quot;,&quot;60f73f7f-61c7-4238-87b0-0bf8b4740e43&quot;,&quot;c2262d3b-d2fa-4b1c-8409-8be1532dc222&quot;,&quot;5294d253-7c5d-443c-8381-9a54e672ee1d&quot;,&quot;ea5fa451-b81f-49ce-82f8-ff5b0833d0b1&quot;,&quot;5b58e017-4761-4a6c-bcbe-4e8b93152511&quot;,&quot;4f7c7079-7fd4-4e76-b481-cfc76f55fca4&quot;,&quot;d47ef1db-182b-4fcc-be11-94ab90763f42&quot;,&quot;9ac4debf-7b11-4d19-93a9-99dba811f8b1&quot;,&quot;8662f4de-2e0d-4798-99ec-8cfccde480ff&quot;,&quot;1b5289c2-9f4a-4b27-9e2c-627a1386dd92&quot;,&quot;ae1acf67-d062-4168-82a1-5dc1a0cc6a02&quot;,&quot;3b54695c-7f26-400c-843f-df7309d0e916&quot;,&quot;2a91bb9c-66dc-4f7f-b369-0be2c0e77244&quot;,&quot;f53a6e1f-f8c1-4d5a-b5ee-9dfb2c4333ad&quot;,&quot;8d9b9b7e-e7bf-4871-9d17-b35c7a40009e&quot;,&quot;516d450e-c311-4792-9508-b18701bad884&quot;,&quot;bcb181d7-0e5c-4733-9fb1-f6dd5be580da&quot;,&quot;637c6e16-74dc-435f-9e29-fcbf6a26a126&quot;,&quot;fb7000b2-1613-467f-80bd-fbb1000b2e88&quot;,&quot;ffc17d0c-9918-48bb-9cbe-fd1a04fdef55&quot;,&quot;9adbf2c0-b728-4433-b96a-4fe1025f6e75&quot;,&quot;e481880e-d9e9-4ba1-895f-bca622c89cc6&quot;,&quot;52307823-0607-4ee8-8493-48aee174e5cd&quot;,&quot;37630383-c906-4c60-9f15-b1f18bb8e684&quot;,&quot;ff2cceaf-3574-4ada-ab1d-7d283dafceb6&quot;,&quot;8080a68e-528c-47e6-bfd0-7cf68ce8df42&quot;,&quot;e678b966-5b6d-4b7f-968c-9b9add841344&quot;,&quot;1f8648d3-a31d-4222-b816-9021d83fc114&quot;,&quot;3b4976d4-10bb-4bc8-8687-3395e30a2436&quot;,&quot;6493cfbb-c3d5-47a0-b05c-9a68a814c344&quot;,&quot;1e72db09-4100-488b-ae9c-ac5af6113afe&quot;,&quot;9f638425-f69c-4594-b650-e50745338c09&quot;,&quot;d5f647b3-5da0-4119-a309-fc3eb4336a60&quot;,&quot;934bbfbe-517b-4201-85df-18a51f10c19a&quot;,&quot;934bbfbe-517b-4201-85df-18a51f12c19a&quot;],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:&quot;Illuminate\\Notifications\\DatabaseNotificationCollection&quot;},&quot;unread&quot;:{&quot;class&quot;:&quot;Illuminate\\Notifications\\DatabaseNotification&quot;,&quot;id&quot;:[&quot;e814d30d-0c32-43fa-87d6-0c624d0539f6&quot;,&quot;1175d561-3ac4-4934-a4ed-295eabb0b3c9&quot;,&quot;2ee6d3e8-0f2b-461d-b69e-7cefac0c6caa&quot;,&quot;320b5b10-6eeb-4eca-9767-3fab32388627&quot;,&quot;6c94261d-461c-46ac-b49a-81e08394e965&quot;,&quot;9001cc30-d450-4381-8e26-61a79d4f0386&quot;,&quot;8d17f48e-60b8-46d7-94de-a12dacb82ca5&quot;,&quot;d02718a3-27d3-4f39-9939-50234cb7efc3&quot;,&quot;929745ce-794f-4c27-b37a-182790a79712&quot;,&quot;eba19a58-a7b2-4060-8100-910c5455bc4d&quot;,&quot;e2f10df1-019e-4441-bb87-7703e2614da8&quot;,&quot;c0849a9e-2452-4834-9160-1dda53d2efa9&quot;,&quot;3b4c24b7-30ec-44be-bcd5-a30ae589669f&quot;,&quot;a4e7f8b6-fcc2-44ca-96cd-f21a6754fe49&quot;,&quot;899db90b-c258-4eef-ac36-cdac8a95f73a&quot;,&quot;9867760a-0d2d-4dc0-a8c2-95c335eb8ff8&quot;,&quot;da6cd3a2-d6ac-4e98-af14-aeed4838de10&quot;,&quot;81137f1a-ed4d-415b-a572-2052ddf1689f&quot;,&quot;40437676-6e43-4906-8a5c-166f635b8adc&quot;,&quot;bc7975f0-e7dd-498f-8dda-114ae102a1b6&quot;,&quot;bb810181-c7dd-49d3-9295-3554bc1049e2&quot;,&quot;6a686a50-a7ee-466e-b7f1-501f5749835f&quot;,&quot;212dd212-9fc2-4950-b5c8-13097bbed3da&quot;,&quot;ca8fc757-a0b9-4d2c-8bea-ed89b63f856d&quot;,&quot;16e3114c-58ec-439c-b2d3-b499e95b7fbb&quot;,&quot;23219094-105f-4de9-b17e-95c54feda997&quot;,&quot;e8905d64-a813-47b3-9d03-161a9956f0a1&quot;,&quot;17426019-6fd6-4a4e-8c3d-f70b413c57cd&quot;,&quot;8dbfa30e-f872-4b5a-872a-13f7ff53f9e5&quot;,&quot;6e5a0576-61bb-4b3c-8287-c8abbe8a9600&quot;,&quot;fb037a40-ea45-4056-aa4e-bf744d4b8195&quot;,&quot;e6f84e88-d12f-41ae-b2cc-279fe4dae6c2&quot;,&quot;fadcca69-e55a-40c2-9b0e-0582b5f28746&quot;,&quot;81496256-2601-476f-9385-cabcfa356674&quot;,&quot;241eef66-9996-4d6e-ae1e-bfa4960cf5e6&quot;,&quot;734f24ce-edb9-4965-bb86-debea52746e6&quot;,&quot;3ce974c1-8896-43a2-ace5-cb1e8c2c71a5&quot;,&quot;fff67657-67af-46aa-8a93-830a0e7e16f0&quot;,&quot;9a128a1b-faaa-4f80-8a2e-3c103a34ff22&quot;,&quot;ad5f1a0d-dccf-4d48-a6f6-460f01d1490e&quot;,&quot;b0ae11c0-4712-4ccc-bf3f-6b1aa1441204&quot;,&quot;21a37ad8-54c6-452b-a275-62467ee61c3e&quot;,&quot;db1a6a38-323d-477d-b7ce-61d9ecee5078&quot;,&quot;1300349f-cfc7-4408-a5b0-3a75bc84bee4&quot;,&quot;fae5064b-3a05-4251-82c5-dd6b2e96c4c9&quot;,&quot;7c8c1129-c124-4caa-9cc4-4bc54ca010f4&quot;,&quot;25cfdd51-15c8-4ca1-b0e8-1d3f1854fecd&quot;,&quot;3a19a024-6b6e-4eb4-b3c4-9cd96ae1a76b&quot;,&quot;a6067b4f-a561-4c89-93c3-040b0192878f&quot;,&quot;8feadb64-af60-4c2c-9611-2a0c7e957789&quot;,&quot;27da8c44-ff41-42f2-9323-01275e346560&quot;,&quot;9f7cfca9-4c8e-4b50-a179-aad2612b02fb&quot;,&quot;ce9e910f-ca6f-4ec0-890b-a8e5ca6d8c5f&quot;,&quot;e1baad4f-8575-4d76-9af5-f9c461f9607c&quot;,&quot;c4dc042c-6e83-4ea3-accd-28865530a13e&quot;,&quot;ac0b6eaf-f85f-4e08-9bb3-472c586a24ff&quot;,&quot;c60d1f19-b650-471a-9d08-79b51291146c&quot;,&quot;fb8be2a3-3fd4-46dd-9785-a198fb451c2e&quot;,&quot;34b86fa9-e8b5-47bb-8784-79817ce7bcf6&quot;,&quot;aa6a5681-2b5f-4062-8941-3d439cf83fd3&quot;,&quot;b75ddf9b-ff55-4c44-962c-fd7f00b96df8&quot;,&quot;3ef48a0f-0ab7-4779-944f-45cdea1dab98&quot;,&quot;5c55af3b-741b-466c-8321-e031d3330a9f&quot;,&quot;eeace423-e62b-47e7-89ea-dcf95f8bf246&quot;,&quot;824f1bda-4aac-4071-bfa6-3ec0687c2e85&quot;,&quot;5b807661-db11-40a5-8525-6afbb438315d&quot;,&quot;bc615229-20b1-4bed-9533-beb1da056ca5&quot;,&quot;074a065a-3ec9-47b3-a5be-64b68692e13c&quot;,&quot;9ae03493-f3d3-44e2-acde-903378f3b0db&quot;,&quot;7cd48afa-c82d-4181-917e-85d3244593ec&quot;,&quot;d78d5d38-59a3-43f7-a0da-c350dcb55c96&quot;,&quot;1f21c311-aa28-4de9-a23f-a2fbb61859a4&quot;,&quot;3eeba89a-6c78-4e39-a5f7-0c9a1459e2df&quot;,&quot;6fd49999-b01b-49cb-8c90-355953fb0c58&quot;,&quot;e7d9116e-7574-4b31-90ab-543309646938&quot;,&quot;af31ff69-0bd7-4da4-a82d-444b14cdfe0d&quot;,&quot;1a17725c-8194-4456-87f7-96811b68de46&quot;,&quot;df76ca6c-1110-48d2-9639-a78d986869f6&quot;,&quot;0e33c4e1-104b-43a7-a45c-84afd0ca047c&quot;,&quot;71542c9b-495f-4027-83fe-bb313be90ffb&quot;,&quot;39eb30fd-0ec2-480d-80b4-92d4c45bedfc&quot;,&quot;84dcc4e0-3048-4e0b-9432-e45a0250da60&quot;,&quot;c6fec5be-46a9-4c81-87c5-0cde68095665&quot;,&quot;2f8a7cc0-c010-4130-bc2c-158bf990c9b6&quot;,&quot;8e893c61-6200-4554-984c-eec0711674b6&quot;,&quot;4df2cd67-5330-4061-9dd0-2e63eaf12761&quot;,&quot;d94e22bd-caf2-4678-975d-2179e93718ad&quot;,&quot;f587c115-581b-46ae-a3f3-8a9d8eab3e1a&quot;,&quot;c82ed6f0-a1de-46dd-8c8a-2f7a00fa064c&quot;,&quot;8fb08614-9566-43b5-87bb-8e708245f3da&quot;,&quot;ed694bf9-5b73-4587-9630-4f09506a3d19&quot;,&quot;1d803a67-1d17-45a9-adb8-dd572c77ae02&quot;,&quot;3d2bf09e-aa69-46cc-a0fe-4d09ce3744ff&quot;,&quot;43d4e763-7589-49ba-b658-07d54bf5467d&quot;,&quot;318a7b6c-50f5-4f6f-b810-fcf2644517ff&quot;,&quot;b060f5ac-74b0-4cc0-b675-0a376159911b&quot;,&quot;1e507331-a357-432e-a5c7-c6f637f84fc3&quot;,&quot;dc5b7403-fbb8-4988-9fae-e00e1fecb99b&quot;,&quot;be823b83-a0f6-4aed-b71d-3158de34d7d5&quot;,&quot;f7e2fdcc-b9f2-4df6-913c-0393250b17f5&quot;,&quot;2546b369-23cb-4117-9cd2-6d4de67ddefe&quot;,&quot;8ee49393-7d7a-467e-8944-4fbe13dc9522&quot;,&quot;f5aed4fa-9055-45c2-9d2b-fec001db5616&quot;,&quot;c15be0fc-90b8-4dd7-9d3b-aee82aa2b4cd&quot;,&quot;11dc4dd2-0022-48dd-a213-435c2032729e&quot;,&quot;064d65d7-3105-4356-891b-b18a854ce45d&quot;,&quot;e1abb77a-f255-465b-b75d-2345b216f793&quot;,&quot;1e6e39bb-2e87-4627-a80c-0ba97d699d8e&quot;,&quot;b9537063-7376-4096-94e5-dbc97ee37912&quot;,&quot;6a7fb54e-8f47-4132-a5cc-969af4341942&quot;,&quot;27cfee23-2e5b-4472-ad3e-cb40516d8c37&quot;,&quot;4ad9f3ba-22f0-4863-9927-da580868935e&quot;,&quot;846170d3-ff1e-402e-b341-649af76fa3c7&quot;,&quot;60f3a5e1-19ce-4cf7-a7c3-958ef9a30306&quot;,&quot;2ceaf417-9634-442d-b2ba-b6c726ae47bf&quot;,&quot;bae7027d-1611-4430-9a43-e6d7a4e7cd5d&quot;,&quot;f4d16bb6-7eda-4e3a-9b37-dbaf21b41ea7&quot;,&quot;84f9bbca-e169-433b-9726-39cff84588fc&quot;,&quot;2d290318-61a3-47a4-9c1f-77459844056b&quot;,&quot;f111dcaf-1f87-428b-a84c-44ce254ec363&quot;,&quot;cc911439-aff8-48bc-b9fa-907fe10cb91e&quot;,&quot;9b3f838b-d451-4e4b-b06d-cdd2cd19b0df&quot;,&quot;772cc3aa-6d2c-4ff4-9040-1e86eb4a4a7d&quot;,&quot;36ae9074-e1de-4ae7-ad17-e53b91b01218&quot;,&quot;ccc53b37-5554-4fc3-84cb-4163d5dead99&quot;,&quot;9869a268-c98d-4953-9090-4f33d1944e09&quot;,&quot;b424d371-1c26-46a8-b2c8-6b1868d1f3b9&quot;,&quot;602f9b9c-605c-41b5-9bf9-0c072a66f513&quot;,&quot;7e310ab1-b04f-4ce2-937b-b386257bde20&quot;,&quot;45c63d2d-40ac-41c6-99f4-9622b659263c&quot;,&quot;ffe654d1-ace8-4907-bdbb-edfc093c16e9&quot;,&quot;970b47c2-b5de-4dd7-8aaa-d6f1fc0a665d&quot;,&quot;e03ef350-b632-4c12-884a-261c5bde59d4&quot;,&quot;249ceafd-6565-4d01-8b92-0978d54c2d32&quot;,&quot;77c9d822-4e42-42f1-b135-f940bdffdc33&quot;,&quot;ba4bef4d-972e-424e-8b12-2ce253e84074&quot;,&quot;6e099fa2-4028-48d7-ae57-2bb1767d672d&quot;,&quot;9ef0fe3c-0938-433b-8475-dafe574ac3ac&quot;,&quot;535f06c0-5cc6-4564-a2b3-4ef4dfe92976&quot;,&quot;a90ef7d9-af14-4780-b4a6-ec945175e59e&quot;,&quot;edbe97cb-9df5-47ac-bdc0-8b0c4b88a4b4&quot;,&quot;7535981f-ecd1-4850-b5b2-2fc2b77a9d8d&quot;,&quot;fab2855e-081a-4e78-9f1b-595d680816b7&quot;,&quot;1f22683b-c7ef-4e34-b1af-58dc86931017&quot;,&quot;cf4ae8e4-9de3-4833-8a25-45591555389a&quot;,&quot;0a2f3e74-7e35-4eea-8f01-c550794d8908&quot;,&quot;549df5a0-e64d-44b7-948d-d407a4432bdf&quot;,&quot;b378424d-d0dd-40a6-b2c3-f0542d016f75&quot;,&quot;2dc498f4-7f4a-490c-af12-28feed33821a&quot;,&quot;afd6b2b9-3afd-4ae1-b0dd-52b5350544eb&quot;,&quot;c1d4d495-dc03-43bc-971a-2bdbfce9d1b9&quot;,&quot;10f573e3-896e-432d-8034-405c25c4f7fc&quot;,&quot;4f82251f-e2df-41a1-acdf-2b4f46664851&quot;,&quot;2373a174-0982-4bb8-9395-de8c9f241508&quot;,&quot;6a17bcc2-b83c-4041-a6fe-1555d90f9193&quot;,&quot;9d6746b1-de44-48bf-b4ad-cbcc91e405f8&quot;],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:&quot;Illuminate\\Notifications\\DatabaseNotificationCollection&quot;}}},&quot;checksum&quot;:&quot;7302e8e89f9e7b1ae53f0d95b3f64a9dad7e19ffcd9c00c5ebe1b133ae89e47e&quot;}}" class="megaphone d-flex align-items-center ms-1 ms-lg-3">
          <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" id="kt_notify_button">
          <i class="fa-thin fa-bell fa-2x text-primary  fa-shake "></i>
      </div></div>
      <!-- Livewire Component wire-end:6cpQa5D6h4oWDr73KOT2 --></livewire:megaphone>
                  <!--begin::User-->
                  <div class="d-flex align-items-center ms-2 ms-lg-3" id="kt_header_user_menu_toggle">
                    <!--begin::Menu wrapper-->
                    <div class="cursor-pointer symbol symbol-50px symbol-circle" data-kt-menu-trigger="{default: 'click'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                      <div class="symbol-label fs-2 fw-bolder text-dark">JO</div>
                    </div>
                    <!--begin::User account menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true" style="">
                      <!--begin::Menu item-->
                      <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                          <!--begin::Avatar-->
                          <div class="symbol symbol-50px symbol-circle me-5">
                            <div class="symbol-label fs-2 fw-bolder text-dark">JO</div>
                          </div>
                          <!--end::Avatar-->
      
                          <!--begin::Username-->
                          <div class="d-flex flex-column">
                            <div class="fw-bolder d-flex align-items-center fs-5">
                              John Doe
                            </div>
      
                            <div class="fw-semibold text-hover-primary fs-5">
                              <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c4a0a1a9ab84a6ababa9a7aca5b6b0eaaaa1b0">[email&#160;protected]</a>
                            </div>
                          </div>
                          <!--end::Username-->
                        </div>
                      </div>
      
                      <div class="separator"></div>
      
                      <div class="menu-item px-5 mb-0">
                        <a href="https://nothingdevelopers.xyz/konan/user/ticket/all" class="menu-link px-5 py-3">
                          <i class="fal fa-clipboard-list-check me-3"></i> Support Ticket
                        </a>
                      </div>
      
                      <div class="separator"></div>
                      <div class="menu-item px-5 mb-0">
                        <a href="https://nothingdevelopers.xyz/konan/user/profile/index/profile" class="menu-link px-5 py-3">
                          <i class="fal fa-user me-3"></i> My Profile
                        </a>
                      </div>
      
                      <div class="separator"></div>
      
                      <div class="menu-item px-5 mb-0">
                        <a href="https://nothingdevelopers.xyz/konan/user/logout" class="menu-link px-5 py-3">
                          <i class="fal fa-sign-out me-3"></i> Sign Out
                        </a>
                      </div>
                      <!--end::Menu item-->
                    </div>
                    <!--end::User account menu-->
                    <!--end::Menu wrapper-->
                  </div>
                  <!--end::User -->
                  <!--begin::Aside Toggle-->
                  <div class="d-flex align-items-center d-lg-none ms-1 ms-lg-3">
                    <div class="btn btn-icon btn-icon-dark btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_toggle">
                      <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                      <span class="svg-icon svg-icon-2x">
                        <i class="fa-thin fa-bars"></i>
                      </span>
                      <!--end::Svg Icon-->
                    </div>
                  </div>
                  <!--end::Aside Toggle-->
                </div>
                <!--end::Toolbar wrapper-->
              </div>
              <!--end::Topbar-->
            </div>
            <!--end::Container-->
          </div>
          <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
            <div wire:id="Jvwe2Pi2oMEvagDa6v0R" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;Jvwe2Pi2oMEvagDa6v0R&quot;,&quot;name&quot;:&quot;megaphone.popout&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;6de2db61&quot;,&quot;data&quot;:{&quot;user&quot;:[],&quot;announcements&quot;:[],&quot;unread&quot;:[],&quot;read&quot;:null,&quot;rules&quot;:{&quot;unread&quot;:&quot;required&quot;,&quot;announcements&quot;:&quot;required&quot;}},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;user&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:&quot;92647996-3b3d-4510-895d-2b1a85d093e0&quot;,&quot;relations&quot;:[&quot;business&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}},&quot;modelCollections&quot;:{&quot;announcements&quot;:{&quot;class&quot;:&quot;Illuminate\\Notifications\\DatabaseNotification&quot;,&quot;id&quot;:[&quot;df5a7088-0760-4142-9e0b-93da7339444a&quot;,&quot;42aaa864-4fed-4041-b3f1-40d679a026da&quot;,&quot;4a2f28ed-6fe4-48ed-8bd4-a8fbc05d7b81&quot;,&quot;cb92cd01-0935-4806-ab89-a302a18fd0fd&quot;,&quot;7ff7700e-9b59-42ba-a805-1737bf92bb7b&quot;,&quot;f5df54d9-4b66-4407-ac25-ff0663070e59&quot;,&quot;b2a1ac86-bc0b-4d26-af5b-131e6313612c&quot;,&quot;13b87cac-c9b9-4871-97d9-9d020adc481b&quot;,&quot;548bc0b5-0dc1-4ea3-9a94-4faed335fdd0&quot;,&quot;01a2d641-c753-4bca-987a-1855a0b6125b&quot;,&quot;0a82d5e2-ecbe-4014-b713-67b62f44ba62&quot;,&quot;ce71bd18-0422-4c72-ba0e-c70922063b4d&quot;,&quot;55da2b00-507c-41b6-b67f-0e62a84ff405&quot;,&quot;6cef7e45-7af4-47d3-9bcb-47c4d55c64c4&quot;,&quot;20d5ddaa-6c97-4373-9f61-547a80a6f712&quot;,&quot;3a084638-76ba-41ee-bb2b-9540dc967c1e&quot;,&quot;53c2d44a-2ec4-4974-a4c4-91747f6b257b&quot;,&quot;308fe6f8-d2d4-46ad-aa1c-9146b7a7b8ca&quot;,&quot;5e9e9cec-69e6-4954-8398-89d68264e89e&quot;,&quot;4d5243d5-6ca8-4858-9b0b-f17212884a4f&quot;,&quot;cf8af70a-19ce-4e8c-80a6-a29c971c9472&quot;,&quot;a92cd3fa-2125-45e2-a946-4c2c2975489f&quot;,&quot;8f9ae9d3-c95b-4518-aeaa-364d1a8ab50a&quot;,&quot;acac5e69-6471-4f38-8fac-c39956fdb5fb&quot;,&quot;6b9582e6-6175-4b5c-8137-d201e3f4fdce&quot;,&quot;5392352a-612e-4384-8ba0-53907c99ccbb&quot;,&quot;832c9a8b-ae29-4301-906e-d618c9b45038&quot;,&quot;474ba324-9646-4a0a-b01b-7ad8a88f79a8&quot;,&quot;dc7b28be-b66e-42a6-b716-04533d1e33a0&quot;,&quot;24cc2541-9c0d-4e12-bb48-febd85980325&quot;,&quot;191de5fc-fde5-40c4-8320-9634379df1a2&quot;,&quot;6ae0bf97-0904-438d-bc69-5d2dbb24928b&quot;,&quot;9e54f619-9e73-407f-a5f6-2252df8a676c&quot;,&quot;a3b997d5-2826-48b3-8e08-0caf5a8e18dc&quot;,&quot;2282db75-982a-4041-b134-969baa1f58c3&quot;,&quot;58e62640-7e05-4e2f-8024-01c10bd8ea74&quot;,&quot;91c906d2-a9cd-4e7a-9ab2-b149ba0375b8&quot;,&quot;b902be7b-d403-48f8-98f8-0b2525dbb295&quot;,&quot;a4f52365-5190-4cab-ab61-b0c71c3ca145&quot;,&quot;7f1da4a1-0b82-48ec-bea6-4e3d7d80fcd8&quot;,&quot;a1614f6b-3f13-49a2-b8d0-e58ec7b0bdfd&quot;,&quot;9d0d7385-fdd7-49e8-86aa-4ff8491e51bf&quot;,&quot;e3b6c0a3-a5d7-4f56-b968-6fb84c66584c&quot;,&quot;a42e8e54-2735-44ed-b686-ae52eb55424a&quot;,&quot;26ba09d6-3f5b-4df8-9fbe-9f3e6305dc42&quot;,&quot;98a92f4e-0e6e-4a0a-a40c-6fa2c05f7d0c&quot;,&quot;ec7425b0-8972-4969-b4f9-c0c5bac19823&quot;,&quot;f57b1665-dd0b-49d3-8faa-565bc531e026&quot;,&quot;6d62404c-46bc-4f36-9952-a46e72d71927&quot;,&quot;4279b7cf-c676-4e2f-9806-36065c3bbcab&quot;,&quot;86a3382a-e917-4f22-bc94-0f50d46325a2&quot;,&quot;99fbdeaf-de7c-4eb6-92fc-26a1283dcd4f&quot;,&quot;d581ddc0-cb72-4fb6-a807-147f3e3594c3&quot;,&quot;8c38d9c9-1d93-4faf-8c35-c677190b4a09&quot;,&quot;df38ba81-0b76-4b03-bf51-757ad4d8b8e7&quot;,&quot;6e255c61-4245-457e-8ff8-8b3d3f7cd601&quot;,&quot;b5427962-5f35-4a2a-921f-e19e02d8e961&quot;,&quot;6c0ffbf3-3752-4fd3-b546-05ccf6e20634&quot;,&quot;496136da-6b1f-42f1-86dd-298bf6b8c121&quot;,&quot;33c5bdd3-569d-4a01-89c0-f80c2ff38cc9&quot;,&quot;99e20581-3ede-4f8c-a5db-6ed84843e778&quot;,&quot;afb65c90-1bca-49cb-b395-d149322d47ec&quot;,&quot;f5666b9a-1fdc-4a73-90b1-81015fb9cb08&quot;,&quot;b0abf49b-fa81-430a-bc33-05da2a9e6f15&quot;,&quot;f63a61ea-7521-485a-9375-c413b942fc6f&quot;,&quot;8b2df270-b726-42fd-adc3-58a002db6873&quot;,&quot;07948a43-ce54-4d28-acb6-8e43a2293af8&quot;,&quot;60f73f7f-61c7-4238-87b0-0bf8b4740e43&quot;,&quot;c2262d3b-d2fa-4b1c-8409-8be1532dc222&quot;,&quot;5294d253-7c5d-443c-8381-9a54e672ee1d&quot;,&quot;ea5fa451-b81f-49ce-82f8-ff5b0833d0b1&quot;,&quot;5b58e017-4761-4a6c-bcbe-4e8b93152511&quot;,&quot;4f7c7079-7fd4-4e76-b481-cfc76f55fca4&quot;,&quot;d47ef1db-182b-4fcc-be11-94ab90763f42&quot;,&quot;9ac4debf-7b11-4d19-93a9-99dba811f8b1&quot;,&quot;8662f4de-2e0d-4798-99ec-8cfccde480ff&quot;,&quot;1b5289c2-9f4a-4b27-9e2c-627a1386dd92&quot;,&quot;ae1acf67-d062-4168-82a1-5dc1a0cc6a02&quot;,&quot;3b54695c-7f26-400c-843f-df7309d0e916&quot;,&quot;2a91bb9c-66dc-4f7f-b369-0be2c0e77244&quot;,&quot;f53a6e1f-f8c1-4d5a-b5ee-9dfb2c4333ad&quot;,&quot;8d9b9b7e-e7bf-4871-9d17-b35c7a40009e&quot;,&quot;516d450e-c311-4792-9508-b18701bad884&quot;,&quot;bcb181d7-0e5c-4733-9fb1-f6dd5be580da&quot;,&quot;637c6e16-74dc-435f-9e29-fcbf6a26a126&quot;,&quot;fb7000b2-1613-467f-80bd-fbb1000b2e88&quot;,&quot;ffc17d0c-9918-48bb-9cbe-fd1a04fdef55&quot;,&quot;9adbf2c0-b728-4433-b96a-4fe1025f6e75&quot;,&quot;e481880e-d9e9-4ba1-895f-bca622c89cc6&quot;,&quot;52307823-0607-4ee8-8493-48aee174e5cd&quot;,&quot;37630383-c906-4c60-9f15-b1f18bb8e684&quot;,&quot;ff2cceaf-3574-4ada-ab1d-7d283dafceb6&quot;,&quot;8080a68e-528c-47e6-bfd0-7cf68ce8df42&quot;,&quot;e678b966-5b6d-4b7f-968c-9b9add841344&quot;,&quot;1f8648d3-a31d-4222-b816-9021d83fc114&quot;,&quot;3b4976d4-10bb-4bc8-8687-3395e30a2436&quot;,&quot;6493cfbb-c3d5-47a0-b05c-9a68a814c344&quot;,&quot;1e72db09-4100-488b-ae9c-ac5af6113afe&quot;,&quot;9f638425-f69c-4594-b650-e50745338c09&quot;,&quot;d5f647b3-5da0-4119-a309-fc3eb4336a60&quot;,&quot;934bbfbe-517b-4201-85df-18a51f10c19a&quot;,&quot;934bbfbe-517b-4201-85df-18a51f12c19a&quot;],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:&quot;Illuminate\\Notifications\\DatabaseNotificationCollection&quot;},&quot;unread&quot;:{&quot;class&quot;:&quot;Illuminate\\Notifications\\DatabaseNotification&quot;,&quot;id&quot;:[&quot;e814d30d-0c32-43fa-87d6-0c624d0539f6&quot;,&quot;1175d561-3ac4-4934-a4ed-295eabb0b3c9&quot;,&quot;2ee6d3e8-0f2b-461d-b69e-7cefac0c6caa&quot;,&quot;320b5b10-6eeb-4eca-9767-3fab32388627&quot;,&quot;6c94261d-461c-46ac-b49a-81e08394e965&quot;,&quot;9001cc30-d450-4381-8e26-61a79d4f0386&quot;,&quot;8d17f48e-60b8-46d7-94de-a12dacb82ca5&quot;,&quot;d02718a3-27d3-4f39-9939-50234cb7efc3&quot;,&quot;929745ce-794f-4c27-b37a-182790a79712&quot;,&quot;eba19a58-a7b2-4060-8100-910c5455bc4d&quot;,&quot;e2f10df1-019e-4441-bb87-7703e2614da8&quot;,&quot;c0849a9e-2452-4834-9160-1dda53d2efa9&quot;,&quot;3b4c24b7-30ec-44be-bcd5-a30ae589669f&quot;,&quot;a4e7f8b6-fcc2-44ca-96cd-f21a6754fe49&quot;,&quot;899db90b-c258-4eef-ac36-cdac8a95f73a&quot;,&quot;9867760a-0d2d-4dc0-a8c2-95c335eb8ff8&quot;,&quot;da6cd3a2-d6ac-4e98-af14-aeed4838de10&quot;,&quot;81137f1a-ed4d-415b-a572-2052ddf1689f&quot;,&quot;40437676-6e43-4906-8a5c-166f635b8adc&quot;,&quot;bc7975f0-e7dd-498f-8dda-114ae102a1b6&quot;,&quot;bb810181-c7dd-49d3-9295-3554bc1049e2&quot;,&quot;6a686a50-a7ee-466e-b7f1-501f5749835f&quot;,&quot;212dd212-9fc2-4950-b5c8-13097bbed3da&quot;,&quot;ca8fc757-a0b9-4d2c-8bea-ed89b63f856d&quot;,&quot;16e3114c-58ec-439c-b2d3-b499e95b7fbb&quot;,&quot;23219094-105f-4de9-b17e-95c54feda997&quot;,&quot;e8905d64-a813-47b3-9d03-161a9956f0a1&quot;,&quot;17426019-6fd6-4a4e-8c3d-f70b413c57cd&quot;,&quot;8dbfa30e-f872-4b5a-872a-13f7ff53f9e5&quot;,&quot;6e5a0576-61bb-4b3c-8287-c8abbe8a9600&quot;,&quot;fb037a40-ea45-4056-aa4e-bf744d4b8195&quot;,&quot;e6f84e88-d12f-41ae-b2cc-279fe4dae6c2&quot;,&quot;fadcca69-e55a-40c2-9b0e-0582b5f28746&quot;,&quot;81496256-2601-476f-9385-cabcfa356674&quot;,&quot;241eef66-9996-4d6e-ae1e-bfa4960cf5e6&quot;,&quot;734f24ce-edb9-4965-bb86-debea52746e6&quot;,&quot;3ce974c1-8896-43a2-ace5-cb1e8c2c71a5&quot;,&quot;fff67657-67af-46aa-8a93-830a0e7e16f0&quot;,&quot;9a128a1b-faaa-4f80-8a2e-3c103a34ff22&quot;,&quot;ad5f1a0d-dccf-4d48-a6f6-460f01d1490e&quot;,&quot;b0ae11c0-4712-4ccc-bf3f-6b1aa1441204&quot;,&quot;21a37ad8-54c6-452b-a275-62467ee61c3e&quot;,&quot;db1a6a38-323d-477d-b7ce-61d9ecee5078&quot;,&quot;1300349f-cfc7-4408-a5b0-3a75bc84bee4&quot;,&quot;fae5064b-3a05-4251-82c5-dd6b2e96c4c9&quot;,&quot;7c8c1129-c124-4caa-9cc4-4bc54ca010f4&quot;,&quot;25cfdd51-15c8-4ca1-b0e8-1d3f1854fecd&quot;,&quot;3a19a024-6b6e-4eb4-b3c4-9cd96ae1a76b&quot;,&quot;a6067b4f-a561-4c89-93c3-040b0192878f&quot;,&quot;8feadb64-af60-4c2c-9611-2a0c7e957789&quot;,&quot;27da8c44-ff41-42f2-9323-01275e346560&quot;,&quot;9f7cfca9-4c8e-4b50-a179-aad2612b02fb&quot;,&quot;ce9e910f-ca6f-4ec0-890b-a8e5ca6d8c5f&quot;,&quot;e1baad4f-8575-4d76-9af5-f9c461f9607c&quot;,&quot;c4dc042c-6e83-4ea3-accd-28865530a13e&quot;,&quot;ac0b6eaf-f85f-4e08-9bb3-472c586a24ff&quot;,&quot;c60d1f19-b650-471a-9d08-79b51291146c&quot;,&quot;fb8be2a3-3fd4-46dd-9785-a198fb451c2e&quot;,&quot;34b86fa9-e8b5-47bb-8784-79817ce7bcf6&quot;,&quot;aa6a5681-2b5f-4062-8941-3d439cf83fd3&quot;,&quot;b75ddf9b-ff55-4c44-962c-fd7f00b96df8&quot;,&quot;3ef48a0f-0ab7-4779-944f-45cdea1dab98&quot;,&quot;5c55af3b-741b-466c-8321-e031d3330a9f&quot;,&quot;eeace423-e62b-47e7-89ea-dcf95f8bf246&quot;,&quot;824f1bda-4aac-4071-bfa6-3ec0687c2e85&quot;,&quot;5b807661-db11-40a5-8525-6afbb438315d&quot;,&quot;bc615229-20b1-4bed-9533-beb1da056ca5&quot;,&quot;074a065a-3ec9-47b3-a5be-64b68692e13c&quot;,&quot;9ae03493-f3d3-44e2-acde-903378f3b0db&quot;,&quot;7cd48afa-c82d-4181-917e-85d3244593ec&quot;,&quot;d78d5d38-59a3-43f7-a0da-c350dcb55c96&quot;,&quot;1f21c311-aa28-4de9-a23f-a2fbb61859a4&quot;,&quot;3eeba89a-6c78-4e39-a5f7-0c9a1459e2df&quot;,&quot;6fd49999-b01b-49cb-8c90-355953fb0c58&quot;,&quot;e7d9116e-7574-4b31-90ab-543309646938&quot;,&quot;af31ff69-0bd7-4da4-a82d-444b14cdfe0d&quot;,&quot;1a17725c-8194-4456-87f7-96811b68de46&quot;,&quot;df76ca6c-1110-48d2-9639-a78d986869f6&quot;,&quot;0e33c4e1-104b-43a7-a45c-84afd0ca047c&quot;,&quot;71542c9b-495f-4027-83fe-bb313be90ffb&quot;,&quot;39eb30fd-0ec2-480d-80b4-92d4c45bedfc&quot;,&quot;84dcc4e0-3048-4e0b-9432-e45a0250da60&quot;,&quot;c6fec5be-46a9-4c81-87c5-0cde68095665&quot;,&quot;2f8a7cc0-c010-4130-bc2c-158bf990c9b6&quot;,&quot;8e893c61-6200-4554-984c-eec0711674b6&quot;,&quot;4df2cd67-5330-4061-9dd0-2e63eaf12761&quot;,&quot;d94e22bd-caf2-4678-975d-2179e93718ad&quot;,&quot;f587c115-581b-46ae-a3f3-8a9d8eab3e1a&quot;,&quot;c82ed6f0-a1de-46dd-8c8a-2f7a00fa064c&quot;,&quot;8fb08614-9566-43b5-87bb-8e708245f3da&quot;,&quot;ed694bf9-5b73-4587-9630-4f09506a3d19&quot;,&quot;1d803a67-1d17-45a9-adb8-dd572c77ae02&quot;,&quot;3d2bf09e-aa69-46cc-a0fe-4d09ce3744ff&quot;,&quot;43d4e763-7589-49ba-b658-07d54bf5467d&quot;,&quot;318a7b6c-50f5-4f6f-b810-fcf2644517ff&quot;,&quot;b060f5ac-74b0-4cc0-b675-0a376159911b&quot;,&quot;1e507331-a357-432e-a5c7-c6f637f84fc3&quot;,&quot;dc5b7403-fbb8-4988-9fae-e00e1fecb99b&quot;,&quot;be823b83-a0f6-4aed-b71d-3158de34d7d5&quot;,&quot;f7e2fdcc-b9f2-4df6-913c-0393250b17f5&quot;,&quot;2546b369-23cb-4117-9cd2-6d4de67ddefe&quot;,&quot;8ee49393-7d7a-467e-8944-4fbe13dc9522&quot;,&quot;f5aed4fa-9055-45c2-9d2b-fec001db5616&quot;,&quot;c15be0fc-90b8-4dd7-9d3b-aee82aa2b4cd&quot;,&quot;11dc4dd2-0022-48dd-a213-435c2032729e&quot;,&quot;064d65d7-3105-4356-891b-b18a854ce45d&quot;,&quot;e1abb77a-f255-465b-b75d-2345b216f793&quot;,&quot;1e6e39bb-2e87-4627-a80c-0ba97d699d8e&quot;,&quot;b9537063-7376-4096-94e5-dbc97ee37912&quot;,&quot;6a7fb54e-8f47-4132-a5cc-969af4341942&quot;,&quot;27cfee23-2e5b-4472-ad3e-cb40516d8c37&quot;,&quot;4ad9f3ba-22f0-4863-9927-da580868935e&quot;,&quot;846170d3-ff1e-402e-b341-649af76fa3c7&quot;,&quot;60f3a5e1-19ce-4cf7-a7c3-958ef9a30306&quot;,&quot;2ceaf417-9634-442d-b2ba-b6c726ae47bf&quot;,&quot;bae7027d-1611-4430-9a43-e6d7a4e7cd5d&quot;,&quot;f4d16bb6-7eda-4e3a-9b37-dbaf21b41ea7&quot;,&quot;84f9bbca-e169-433b-9726-39cff84588fc&quot;,&quot;2d290318-61a3-47a4-9c1f-77459844056b&quot;,&quot;f111dcaf-1f87-428b-a84c-44ce254ec363&quot;,&quot;cc911439-aff8-48bc-b9fa-907fe10cb91e&quot;,&quot;9b3f838b-d451-4e4b-b06d-cdd2cd19b0df&quot;,&quot;772cc3aa-6d2c-4ff4-9040-1e86eb4a4a7d&quot;,&quot;36ae9074-e1de-4ae7-ad17-e53b91b01218&quot;,&quot;ccc53b37-5554-4fc3-84cb-4163d5dead99&quot;,&quot;9869a268-c98d-4953-9090-4f33d1944e09&quot;,&quot;b424d371-1c26-46a8-b2c8-6b1868d1f3b9&quot;,&quot;602f9b9c-605c-41b5-9bf9-0c072a66f513&quot;,&quot;7e310ab1-b04f-4ce2-937b-b386257bde20&quot;,&quot;45c63d2d-40ac-41c6-99f4-9622b659263c&quot;,&quot;ffe654d1-ace8-4907-bdbb-edfc093c16e9&quot;,&quot;970b47c2-b5de-4dd7-8aaa-d6f1fc0a665d&quot;,&quot;e03ef350-b632-4c12-884a-261c5bde59d4&quot;,&quot;249ceafd-6565-4d01-8b92-0978d54c2d32&quot;,&quot;77c9d822-4e42-42f1-b135-f940bdffdc33&quot;,&quot;ba4bef4d-972e-424e-8b12-2ce253e84074&quot;,&quot;6e099fa2-4028-48d7-ae57-2bb1767d672d&quot;,&quot;9ef0fe3c-0938-433b-8475-dafe574ac3ac&quot;,&quot;535f06c0-5cc6-4564-a2b3-4ef4dfe92976&quot;,&quot;a90ef7d9-af14-4780-b4a6-ec945175e59e&quot;,&quot;edbe97cb-9df5-47ac-bdc0-8b0c4b88a4b4&quot;,&quot;7535981f-ecd1-4850-b5b2-2fc2b77a9d8d&quot;,&quot;fab2855e-081a-4e78-9f1b-595d680816b7&quot;,&quot;1f22683b-c7ef-4e34-b1af-58dc86931017&quot;,&quot;cf4ae8e4-9de3-4833-8a25-45591555389a&quot;,&quot;0a2f3e74-7e35-4eea-8f01-c550794d8908&quot;,&quot;549df5a0-e64d-44b7-948d-d407a4432bdf&quot;,&quot;b378424d-d0dd-40a6-b2c3-f0542d016f75&quot;,&quot;2dc498f4-7f4a-490c-af12-28feed33821a&quot;,&quot;afd6b2b9-3afd-4ae1-b0dd-52b5350544eb&quot;,&quot;c1d4d495-dc03-43bc-971a-2bdbfce9d1b9&quot;,&quot;10f573e3-896e-432d-8034-405c25c4f7fc&quot;,&quot;4f82251f-e2df-41a1-acdf-2b4f46664851&quot;,&quot;2373a174-0982-4bb8-9395-de8c9f241508&quot;,&quot;6a17bcc2-b83c-4041-a6fe-1555d90f9193&quot;,&quot;9d6746b1-de44-48bf-b4ad-cbcc91e405f8&quot;],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:&quot;Illuminate\\Notifications\\DatabaseNotificationCollection&quot;}}},&quot;checksum&quot;:&quot;16f0c575c87448f20beb4d9278330e7aab5cbf25ae7e464b4f329fdf415518dd&quot;}}" id="kt_notify_account" class="bg-white" x-data="{ isDrawer: false }" x-init="isDrawer = false" x-bind:class="{ 'bg-white drawer drawer-end drawer-on': isDrawer }" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_notify_button" data-kt-drawer-close="#kt_notify_close">
          <div class="card w-100">
              <div class="card-header pe-5">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Notifications</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_drawer_example_basic_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 200.00 GBP to **** 8853 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">4 minutes ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('e814d30d-0c32-43fa-87d6-0c624d0539f6')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 200.00 GBP to **** 8853 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">10 minutes ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('1175d561-3ac4-4934-a4ed-295eabb0b3c9')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 200.00 GBP to **** 8853 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">11 minutes ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('2ee6d3e8-0f2b-461d-b69e-7cefac0c6caa')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 200.00 GBP to **** 8853 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">12 minutes ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('320b5b10-6eeb-4eca-9767-3fab32388627')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 6,000.00 GBP to J D Lange</div>
                                  <div class="fs-7 text-gray-700 pe-7">17 hours ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('6c94261d-461c-46ac-b49a-81e08394e965')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 6,000.00 GBP to J D Lange</div>
                                  <div class="fs-7 text-gray-700 pe-7">20 hours ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('9001cc30-d450-4381-8e26-61a79d4f0386')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 6,000.00 GBP to J D Lange</div>
                                  <div class="fs-7 text-gray-700 pe-7">21 hours ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('8d17f48e-60b8-46d7-94de-a12dacb82ca5')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 6,000.00 GBP to J D Lange</div>
                                  <div class="fs-7 text-gray-700 pe-7">21 hours ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('d02718a3-27d3-4f39-9939-50234cb7efc3')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 6,000.00 GBP to J D Lange</div>
                                  <div class="fs-7 text-gray-700 pe-7">21 hours ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('929745ce-794f-4c27-b37a-182790a79712')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 6,000.00 GBP to J D Lange</div>
                                  <div class="fs-7 text-gray-700 pe-7">21 hours ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('eba19a58-a7b2-4060-8100-910c5455bc4d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 100.00 GBP to **** 6817 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">4 days ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('e2f10df1-019e-4441-bb87-7703e2614da8')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 100.00 GBP to **** 6817 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">4 days ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('c0849a9e-2452-4834-9160-1dda53d2efa9')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 100.00 GBP from John Doe on ****6817</div>
                                  <div class="fs-7 text-gray-700 pe-7">4 days ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('3b4c24b7-30ec-44be-bcd5-a30ae589669f')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 100.00 GBP to **** 6817 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">4 days ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('a4e7f8b6-fcc2-44ca-96cd-f21a6754fe49')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 1,000.00 GBP to Ssemwogerere joel</div>
                                  <div class="fs-7 text-gray-700 pe-7">4 days ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('899db90b-c258-4eef-ac36-cdac8a95f73a')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 222.00 GBP to **** 1925 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('9867760a-0d2d-4dc0-a8c2-95c335eb8ff8')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 222.00 GBP from John Doe on ****1925</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('da6cd3a2-d6ac-4e98-af14-aeed4838de10')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 222.00 GBP to **** 1925 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('81137f1a-ed4d-415b-a572-2052ddf1689f')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transaction Statement</h5>
      
                                  <div class="fs-6 text-dark pe-7">June 23, 2023 - July 22, 2023 csv transaction export completed</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('40437676-6e43-4906-8a5c-166f635b8adc')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 222.00 GBP from John Doe on ****1925</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('bc7975f0-e7dd-498f-8dda-114ae102a1b6')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 222.00 GBP from John Doe on ****1925</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('bb810181-c7dd-49d3-9295-3554bc1049e2')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 222.00 GBP to **** 1925 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('6a686a50-a7ee-466e-b7f1-501f5749835f')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 222.00 GBP from John Doe on ****1925</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('212dd212-9fc2-4950-b5c8-13097bbed3da')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 222.00 GBP to **** 1925 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('ca8fc757-a0b9-4d2c-8bea-ed89b63f856d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 222.00 GBP from John Doe on ****1925</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('16e3114c-58ec-439c-b2d3-b499e95b7fbb')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 222.00 GBP to **** 1925 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('23219094-105f-4de9-b17e-95c54feda997')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 222.00 GBP from John Doe on ****1925</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('e8905d64-a813-47b3-9d03-161a9956f0a1')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 222.00 GBP to **** 1925 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 week ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('17426019-6fd6-4a4e-8c3d-f70b413c57cd')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 122.00 GBP to John Doe</div>
                                  <div class="fs-7 text-gray-700 pe-7">2 weeks ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('8dbfa30e-f872-4b5a-872a-13f7ff53f9e5')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 900.00 GBP from John Doe on ****2167</div>
                                  <div class="fs-7 text-gray-700 pe-7">2 weeks ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('6e5a0576-61bb-4b3c-8287-c8abbe8a9600')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 900.00 GBP to **** 2167 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">2 weeks ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('fb037a40-ea45-4056-aa4e-bf744d4b8195')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 253.00 GBP from John Doe on ****8249</div>
                                  <div class="fs-7 text-gray-700 pe-7">2 weeks ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('e6f84e88-d12f-41ae-b2cc-279fe4dae6c2')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 253.00 GBP to **** 8249 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">2 weeks ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('fadcca69-e55a-40c2-9b0e-0582b5f28746')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Deposit Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 50.00 GBP from Sender Name</div>
                                  <div class="fs-7 text-gray-700 pe-7">4 weeks ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('81496256-2601-476f-9385-cabcfa356674')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Deposit Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 50.00 GBP from Sender Name</div>
                                  <div class="fs-7 text-gray-700 pe-7">4 weeks ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('241eef66-9996-4d6e-ae1e-bfa4960cf5e6')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Deposit Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 50.00 GBP from Sender Name</div>
                                  <div class="fs-7 text-gray-700 pe-7">4 weeks ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('734f24ce-edb9-4965-bb86-debea52746e6')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 100.00 GBP to **** 1517 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('3ce974c1-8896-43a2-ace5-cb1e8c2c71a5')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 1,000.00 GBP to **** 1517 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('fff67657-67af-46aa-8a93-830a0e7e16f0')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 1,000.00 GBP to **** 1517 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('9a128a1b-faaa-4f80-8a2e-3c103a34ff22')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 1,000.00 GBP to **** 1517 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('ad5f1a0d-dccf-4d48-a6f6-460f01d1490e')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 2.00 GBP from **** 7685 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('b0ae11c0-4712-4ccc-bf3f-6b1aa1441204')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 10.00 GBP from **** 7685 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('21a37ad8-54c6-452b-a275-62467ee61c3e')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 20.00 GBP from John Doe on ****7685</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('db1a6a38-323d-477d-b7ce-61d9ecee5078')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 20.00 GBP to **** 7685 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('1300349f-cfc7-4408-a5b0-3a75bc84bee4')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 10.00 GBP from John Doe on ****7685</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('fae5064b-3a05-4251-82c5-dd6b2e96c4c9')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 7685 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('7c8c1129-c124-4caa-9cc4-4bc54ca010f4')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 7685 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('25cfdd51-15c8-4ca1-b0e8-1d3f1854fecd')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 10.00 GBP from John Doe on ****7685</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('3a19a024-6b6e-4eb4-b3c4-9cd96ae1a76b')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 7685 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('a6067b4f-a561-4c89-93c3-040b0192878f')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 1.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('8feadb64-af60-4c2c-9611-2a0c7e957789')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('27da8c44-ff41-42f2-9323-01275e346560')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('9f7cfca9-4c8e-4b50-a179-aad2612b02fb')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 32.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('ce9e910f-ca6f-4ec0-890b-a8e5ca6d8c5f')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('e1baad4f-8575-4d76-9af5-f9c461f9607c')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('c4dc042c-6e83-4ea3-accd-28865530a13e')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('ac0b6eaf-f85f-4e08-9bb3-472c586a24ff')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('c60d1f19-b650-471a-9d08-79b51291146c')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 11.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('fb8be2a3-3fd4-46dd-9785-a198fb451c2e')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('34b86fa9-e8b5-47bb-8784-79817ce7bcf6')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 32.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('aa6a5681-2b5f-4062-8941-3d439cf83fd3')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('b75ddf9b-ff55-4c44-962c-fd7f00b96df8')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 32.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('3ef48a0f-0ab7-4779-944f-45cdea1dab98')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('5c55af3b-741b-466c-8321-e031d3330a9f')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 11.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('eeace423-e62b-47e7-89ea-dcf95f8bf246')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 32.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('824f1bda-4aac-4071-bfa6-3ec0687c2e85')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('5b807661-db11-40a5-8525-6afbb438315d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('bc615229-20b1-4bed-9533-beb1da056ca5')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('074a065a-3ec9-47b3-a5be-64b68692e13c')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('9ae03493-f3d3-44e2-acde-903378f3b0db')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('7cd48afa-c82d-4181-917e-85d3244593ec')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 11.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('d78d5d38-59a3-43f7-a0da-c350dcb55c96')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 32.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('1f21c311-aa28-4de9-a23f-a2fbb61859a4')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 11.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('3eeba89a-6c78-4e39-a5f7-0c9a1459e2df')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 32.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('6fd49999-b01b-49cb-8c90-355953fb0c58')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('e7d9116e-7574-4b31-90ab-543309646938')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 32.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('af31ff69-0bd7-4da4-a82d-444b14cdfe0d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 32.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('1a17725c-8194-4456-87f7-96811b68de46')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('df76ca6c-1110-48d2-9639-a78d986869f6')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('0e33c4e1-104b-43a7-a45c-84afd0ca047c')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('71542c9b-495f-4027-83fe-bb313be90ffb')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('39eb30fd-0ec2-480d-80b4-92d4c45bedfc')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('84dcc4e0-3048-4e0b-9432-e45a0250da60')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 32.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('c6fec5be-46a9-4c81-87c5-0cde68095665')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 12.00 GBP to Mouth Harik</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('2f8a7cc0-c010-4130-bc2c-158bf990c9b6')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('8e893c61-6200-4554-984c-eec0711674b6')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('4df2cd67-5330-4061-9dd0-2e63eaf12761')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('d94e22bd-caf2-4678-975d-2179e93718ad')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('f587c115-581b-46ae-a3f3-8a9d8eab3e1a')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('c82ed6f0-a1de-46dd-8c8a-2f7a00fa064c')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('8fb08614-9566-43b5-87bb-8e708245f3da')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('ed694bf9-5b73-4587-9630-4f09506a3d19')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('1d803a67-1d17-45a9-adb8-dd572c77ae02')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('3d2bf09e-aa69-46cc-a0fe-4d09ce3744ff')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('43d4e763-7589-49ba-b658-07d54bf5467d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('318a7b6c-50f5-4f6f-b810-fcf2644517ff')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('b060f5ac-74b0-4cc0-b675-0a376159911b')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('1e507331-a357-432e-a5c7-c6f637f84fc3')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('dc5b7403-fbb8-4988-9fae-e00e1fecb99b')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('be823b83-a0f6-4aed-b71d-3158de34d7d5')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('f7e2fdcc-b9f2-4df6-913c-0393250b17f5')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('2546b369-23cb-4117-9cd2-6d4de67ddefe')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('8ee49393-7d7a-467e-8944-4fbe13dc9522')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('f5aed4fa-9055-45c2-9d2b-fec001db5616')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('c15be0fc-90b8-4dd7-9d3b-aee82aa2b4cd')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('11dc4dd2-0022-48dd-a213-435c2032729e')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('064d65d7-3105-4356-891b-b18a854ce45d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('e1abb77a-f255-465b-b75d-2345b216f793')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('1e6e39bb-2e87-4627-a80c-0ba97d699d8e')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('b9537063-7376-4096-94e5-dbc97ee37912')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('6a7fb54e-8f47-4132-a5cc-969af4341942')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('27cfee23-2e5b-4472-ad3e-cb40516d8c37')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 8988 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('4ad9f3ba-22f0-4863-9927-da580868935e')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.29 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('846170d3-ff1e-402e-b341-649af76fa3c7')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.29 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('60f3a5e1-19ce-4cf7-a7c3-958ef9a30306')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.29 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('2ceaf417-9634-442d-b2ba-b6c726ae47bf')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 6.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('bae7027d-1611-4430-9a43-e6d7a4e7cd5d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 6.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('f4d16bb6-7eda-4e3a-9b37-dbaf21b41ea7')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.29 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('84f9bbca-e169-433b-9726-39cff84588fc')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.29 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('2d290318-61a3-47a4-9c1f-77459844056b')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.29 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('f111dcaf-1f87-428b-a84c-44ce254ec363')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.29 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('cc911439-aff8-48bc-b9fa-907fe10cb91e')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.29 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('9b3f838b-d451-4e4b-b06d-cdd2cd19b0df')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 3.00 GBP to Onalugho Lamosi</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('772cc3aa-6d2c-4ff4-9040-1e86eb4a4a7d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 3.00 GBP to Onalugho Lamosi</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('36ae9074-e1de-4ae7-ad17-e53b91b01218')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 4.84 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('ccc53b37-5554-4fc3-84cb-4163d5dead99')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('9869a268-c98d-4953-9090-4f33d1944e09')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('b424d371-1c26-46a8-b2c8-6b1868d1f3b9')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('602f9b9c-605c-41b5-9bf9-0c072a66f513')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('7e310ab1-b04f-4ce2-937b-b386257bde20')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 2.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('45c63d2d-40ac-41c6-99f4-9622b659263c')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('ffe654d1-ace8-4907-bdbb-edfc093c16e9')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('970b47c2-b5de-4dd7-8aaa-d6f1fc0a665d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('e03ef350-b632-4c12-884a-261c5bde59d4')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('249ceafd-6565-4d01-8b92-0978d54c2d32')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('77c9d822-4e42-42f1-b135-f940bdffdc33')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 10.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('ba4bef4d-972e-424e-8b12-2ce253e84074')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 5.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('6e099fa2-4028-48d7-ae57-2bb1767d672d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 3.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('9ef0fe3c-0938-433b-8475-dafe574ac3ac')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 3.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('535f06c0-5cc6-4564-a2b3-4ef4dfe92976')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 3.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('a90ef7d9-af14-4780-b4a6-ec945175e59e')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 5.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('edbe97cb-9df5-47ac-bdc0-8b0c4b88a4b4')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 5.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('7535981f-ecd1-4850-b5b2-2fc2b77a9d8d')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 5.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('fab2855e-081a-4e78-9f1b-595d680816b7')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 5.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('1f22683b-c7ef-4e34-b1af-58dc86931017')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 5.00 GBP to **** 4254 [Onalugho Lamosi]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('cf4ae8e4-9de3-4833-8a25-45591555389a')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transaction Statement</h5>
      
                                  <div class="fs-6 text-dark pe-7"> csv transaction export completed</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('0a2f3e74-7e35-4eea-8f01-c550794d8908')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transaction Statement</h5>
      
                                  <div class="fs-6 text-dark pe-7"> csv transaction export completed</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('549df5a0-e64d-44b7-948d-d407a4432bdf')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 30.00 GBP from John Doe on ****7685</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('b378424d-d0dd-40a6-b2c3-f0542d016f75')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 30.00 GBP to **** 7685 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('2dc498f4-7f4a-490c-af12-28feed33821a')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You received 50.00 GBP from John Doe on ****9152</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('afd6b2b9-3afd-4ae1-b0dd-52b5350544eb')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 50.00 GBP to **** 9152 [John Doe]</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('c1d4d495-dc03-43bc-971a-2bdbfce9d1b9')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 4.00 GBP to Onalugho Lamosi</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('10f573e3-896e-432d-8034-405c25c4f7fc')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 81.54 GBP to Mouth Harik</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('4f82251f-e2df-41a1-acdf-2b4f46664851')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.76 GBP to Onalugho Lamosi</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('2373a174-0982-4bb8-9395-de8c9f241508')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 15.76 GBP to Onalugho Lamosi</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('6a17bcc2-b83c-4041-a6fe-1555d90f9193')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                              <div class="overflow-auto pb-5">
                      <div class="notice bg-light-primary rounded min-w-lg-400px flex-shrink-0 p-6">
                          <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                              <div class="mb-3 mb-md-0 fw-semibold">
                                  <h5 class="text-dark fw-bolder fs-6">Transfer Successful</h5>
      
                                  <div class="fs-6 text-dark pe-7">You sent 22.00 GBP to Onalugho Lamosi</div>
                                  <div class="fs-7 text-gray-700 pe-7">1 month ago</div>
                              </div>
                                                      <button x-data x-on:click.prevent="isDrawer = true; $wire.markAsRead('9d6746b1-de44-48bf-b4ad-cbcc91e405f8')" class="btn btn-primary btn-sm px-6 align-self-center text-nowrap"> <i class="fal fa-thumbs-up"></i> Read </button>
                                                  </div>
                      </div>
                  </div>
                  
              </div>
          </div>
      </div>
      <!-- Livewire Component wire-end:Jvwe2Pi2oMEvagDa6v0R --></livewire:megaphone.popout>
            <div class="toolbar" id="kt_toolbar">
        <div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
          <div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
            <h1 class="text-dark fw-bolder my-1 fs-2">Welcome John, 👋🏼</h1>
            <p class="text-dark">Hi, What would you like to do?</p>
          </div>
          <!--end::Info-->
          <!--begin::Actions-->
          <div class="d-flex align-items-center flex-nowrap text-nowrap py-1 mb-10">
            <button id="kt_bank_account_button" class="btn btn-white text-dark me-4"><i class="fal fa-plus"></i> Top up</button>
            <div id="kt_bank_account" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_bank_account_button" data-kt-drawer-close="#kt_bank_account_close">
              <div class="card w-100">
                <div class="card-header pe-5 border-0">
                  <div class="card-title">
                    <div class="d-flex justify-content-center flex-column me-3">
                      <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Bank Account</div>
                    </div>
                  </div>
                  <div class="card-toolbar">
                    <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_bank_account_close">
                      <span class="svg-icon svg-icon-2">
                        <i class="fal fa-times"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="card-body text-wrap">
                              <div class="d-flex flex-column">
                    <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                        <div class="symbol-label fs-1 text-dark">
                          <i class="fal fa-university fa-2x"></i>
                        </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">Saxo Payments A/S</p>
                      <p class="text-dark fs-6 fw-bold">Hill Tower, 76A, James Bourchier Blvd., 1407 Sofia, Bulgaria</p>
                    </div>
                    <div class="bg-light px-6 py-5 mb-10 rounded">
                      <p class="text-dark fs-6 fw-bolder">Account Details</p>
                      <li class="d-flex align-items-center py-2">
                        <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Account Name: John Doe <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="John Doe" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                        <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Account Number: 02361522 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="02361522" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                        <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Sort code: 388130 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="388130" title="Copy"></i></span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                        <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>IBAN: GB36YZLU38813002361522 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="GB36YZLU38813002361522" title="Copy"></i></span>
                      </li>
                                                      <li class="d-flex align-items-center py-2">
                        <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>BIC: SXPYDKKK <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="SXPYDKKK" title="Copy"></i></span>
                      </li>
                                                      <li class="d-flex align-items-center py-2">
                        <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Payment Reference: 1234567890 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="1234567890" title="Copy"></i></span>
                      </li>
                                    </div>
                  </div>
                              <div class="alert alert-primary d-flex align-items-center p-5">
                    <i class="fal fa-info-circle me-2 fs-2"></i>
                    <div class="d-flex flex-column">
                      <p class="text-dark mb-0">Payment reference helps Konan track payments faster,<br> you must include it in wire transfer description.</p>
                    </div>
                  </div>
                              <div class="bg-light px-6 py-5 mb-10 rounded">
                    <p class="text-dark fs-6 fw-bolder">Deposit Fees</p>
                    <li class="d-flex align-items-center py-2">
                      <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Sepa Wire Transfer:
                                          0.1% + 1 GBP
                         </span>
                    </li>
                    <li class="d-flex align-items-center py-2">
                      <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Faster Payment:
                                          0.4% + 1 GBP
                         </span>
                    </li>
                    <li class="d-flex align-items-center py-2">
                      <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Swift:
                                          0.8% + 2 GBP
                         </span>
                    </li>
                  </div>
                            </div>
              </div>
            </div>
            <button id="kt_send_money_button" class="btn btn-dark"><i class="fal fa-institution"></i> Send Money</button>
            <div id="kt_send_money" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_send_money_button" data-kt-drawer-close="#kt_send_money_close">
              <div class="card w-100">
                <div class="card-header pe-5 border-0">
                  <div class="card-title">
                    <div class="d-flex justify-content-center flex-column me-3">
                      <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Send Money</div>
                    </div>
                  </div>
                  <div class="card-toolbar">
                    <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_send_money_close">
                      <span class="svg-icon svg-icon-2">
                        <i class="fal fa-times"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                    <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                      <div class="symbol-label fs-1 text-dark">
                        <i class="fal fa-arrow-down-arrow-up fa-2x"></i>
                      </div>
                    </div>
                    <p class="text-dark fs-6">Swift and Secure Money Transfer </p>
                  </div>
                  <div class="pb-5 mt-10 position-relative zindex-1">
                    <!--begin::Item-->
                    <a href="https://nothingdevelopers.xyz/konan/user/transfer/method/tag">
                      <div class="d-flex flex-stack mb-6">
                        <div class="d-flex align-items-center me-2">
                          <div class="symbol symbol-45px me-5">
                            <span class="symbol-label bg-light-primary text-dark">
                              <i class="fal fa-user"></i>
                            </span>
                          </div>
                          <div>
                            <p class="fs-5 text-gray-800 text-hover-primary fw-bolder mb-0">Transfer Tag</p>
                            <div class="fs-7 text-gray-800 fw-semibold">Easily send money to other Konan users</div>
                            <div class="fs-7 text-gray-600 fw-semibold">
                                                      0.1% + 1 GBP
                               </div>
                            </div>
                          </div>
                          <p class="btn btn-icon btn-light btn-sm">
                            <i class="fal fa-arrow-right text-dark"></i>
                          </p>
                        </div>
                    </a>
                    <a href="https://nothingdevelopers.xyz/konan/user/transfer/method/card">
                      <div class="d-flex flex-stack mb-6">
                        <div class="d-flex align-items-center me-2">
                          <div class="symbol symbol-45px me-5">
                            <span class="symbol-label bg-light-primary text-dark">
                              <i class="fal fa-credit-card-front"></i>
                            </span>
                          </div>
                          <div>
                            <p class="fs-5 text-gray-800 text-hover-primary fw-bolder mb-0">Virtual Card</p>
                            <div class="fs-7 text-gray-800 fw-semibold">Transfer money to other Konan users prepaid card</div>
                            <div class="fs-7 text-gray-600 fw-semibold">
                                                      0.5% + 2 GBP
                               </div>
                            </div>
                          </div>
                          <p class="btn btn-icon btn-light btn-sm">
                            <i class="fal fa-arrow-right text-dark"></i>
                          </p>
                        </div>
                    </a>
                    <a href="https://nothingdevelopers.xyz/konan/user/transfer/method/sepa">
                      <div class="d-flex flex-stack mb-6">
                        <div class="d-flex align-items-center me-2">
                          <div class="symbol symbol-45px me-5">
                            <span class="symbol-label bg-light-primary text-dark">
                              <i class="fal fa-shuffle"></i>
                            </span>
                          </div>
                          <div>
                            <p class="fs-5 text-gray-800 text-hover-primary fw-bolder mb-0">Sepa Wire Transfer</p>
                            <div class="fs-7 text-gray-800 fw-semibold">Wire transfer is executed over SEPA, Iban<br> & bic are required.</div>
                            <div class="fs-7 text-gray-600 fw-semibold">
                                                      0.3% + 0 GBP
                               </div>
                            </div>
                          </div>
                          <p class="btn btn-icon btn-light btn-sm">
                            <i class="fal fa-arrow-right text-dark"></i>
                          </p>
                        </div>
                    </a>
                    <a href="https://nothingdevelopers.xyz/konan/user/transfer/method/faster">
                      <div class="d-flex flex-stack mb-6">
                        <div class="d-flex align-items-center me-2">
                          <div class="symbol symbol-45px me-5">
                            <span class="symbol-label bg-light-primary text-dark">
                              <i class="fal fa-shuffle"></i>
                            </span>
                          </div>
                          <div>
                            <p class="fs-5 text-gray-800 text-hover-primary fw-bolder mb-0">Faster Payment</p>
                            <div class="fs-7 text-gray-800 fw-semibold">Wire transfer is executed over Faster Payments,<br> Account number & sort code are required.</div>
                            <div class="fs-7 text-gray-600 fw-semibold">
                                                      0.6% + 0 GBP
                               </div>
                            </div>
                          </div>
                          <p class="btn btn-icon btn-light btn-sm">
                            <i class="fal fa-arrow-right text-dark"></i>
                          </p>
                        </div>
                    </a>
                    <!--end::Item-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="post fs-6 d-flex flex-column-fluid min-vh-100" id="kt_post">
          <div class="container">
            <div class="row g-xl-8">
              <div wire:id="SzNTn2cZOGiZs00e9RPv" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;SzNTn2cZOGiZs00e9RPv&quot;,&quot;name&quot;:&quot;balance&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;75383994&quot;,&quot;data&quot;:{&quot;val&quot;:[],&quot;user&quot;:[],&quot;currency&quot;:null},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;val&quot;:{&quot;class&quot;:&quot;App\\Models\\Countrysupported&quot;,&quot;id&quot;:1,&quot;relations&quot;:[&quot;real&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;user&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:&quot;92647996-3b3d-4510-895d-2b1a85d093e0&quot;,&quot;relations&quot;:[&quot;business&quot;,&quot;getCountrySupported&quot;,&quot;getCountrySupported.real&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;181536741d7ab9dd2f403f06f8918081b282cb93fc78a830b278fe9462301787&quot;}}">
          <div class="card bg-transparent h-md-100" wire:poll>
              <div class="card-body p-0">
                  <div class="px-9 pt-6 card-rounded w-100 bgi-no-repeat bgi-size-cover bgi-position-y-top bg-primary  h-250px ">
                      <div class="d-flex flex-stack">
                                              <h3 class="m-0 text-white fw-bold fs-3">@csc  <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="csc" title="Copy"></i></h3>
                                          </div>
                      <div class="fw-bold fs-5 text-center text-white pt-5">
                          <span class="fi fi-gb mr-2 fis rounded-4"></span> Available Balance
                          <span class="fw-bolder fs-2hx d-block mt-n1">
                              <span id="main_balance">
                                  £837.30 GBP                         </span>
                              <span class="ml-3 fs-3 cursor-pointer" wire:click="xBalance">
                                  <i class="fal fa-eye-slash" id="hide_balance" ></i>
                                  <i class="fal fa-eye" id="reveal_balance"  style="display:none;" ></i>
                              </span>
                          </span>
                      </div>
                  </div>
                              <div class="shadow-xs card-rounded mx-9 mb-9 px-6 py-9 position-relative z-index-1 bg-body" style="margin-top: -100px">
                      <p>Complete Account Setup</p>
                                                      
                      
                                      <div class="d-flex align-items-center mb-9">
                          <div class="symbol symbol-40px me-5">
                              <span class="symbol-label">
                                  <i class="fal fa-shield text-dark"></i>
                              </span>
                          </div>
                          <div class="d-flex align-items-center flex-wrap w-100">
                              <a href="https://nothingdevelopers.xyz/konan/user/profile/index/security">
                                  <div class="mb-1 pe-3 flex-grow-1">
                                      <div class="fs-4 text-dark text-hover-primary fw-bolder">Secure your Account</div>
                                      <div class="text-gray-800 fw-semibold">Protect your account with Two-factor authentication.</div>
                                  </div>
                              </a>
                          </div>
                      </div>
                                  </div>
                          </div>
          </div>
      </div>
      <!-- Livewire Component wire-end:SzNTn2cZOGiZs00e9RPv -->      </div>
            <div wire:id="ribhbs9vxn5hcDoLugVG" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;ribhbs9vxn5hcDoLugVG&quot;,&quot;name&quot;:&quot;transactions.recent&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;user\/dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;33104caa&quot;,&quot;data&quot;:{&quot;perPage&quot;:10,&quot;user&quot;:[],&quot;orderBy&quot;:&quot;desc&quot;},&quot;dataMeta&quot;:{&quot;models&quot;:{&quot;user&quot;:{&quot;class&quot;:&quot;App\\Models\\User&quot;,&quot;id&quot;:&quot;92647996-3b3d-4510-895d-2b1a85d093e0&quot;,&quot;relations&quot;:[&quot;business&quot;,&quot;getCountrySupported&quot;,&quot;getCountrySupported.real&quot;],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}}},&quot;checksum&quot;:&quot;4528bfdb451d12821948b420efbbed7066d038415aea628e3d78b0f68f1cbf88&quot;}}">
          <div class="row g-xl-8" wire:poll>
              <div class="col-lg-12 col-md-12">
                              <div class="card card-flush rounded-4">
                      <div class="card-header align-items-center py-5 gap-2 gap-md-5" style="display:inline;">
                          <h3>Recent Transactions</h3>
                      </div>
                      <div class="card-body pt-0">
                          <div class="table-responsive">
                              <table class="table align-middle table-row-bordered table-row-gray-300 gy-5 gs-7" id="kt_datatable_example_5">
                                  <thead>
                                      <tr class="text-start text-dark fw-bolder fs-7 text-uppercase px-7">
                                          <th></th>
                                          <th class="min-w-150px">Amount</th>
                                          <th class="min-w-50px">Status</th>
                                          <th class="min-w-50px">Reference ID</th>
                                          <th class="min-w-200px">Created</th>
                                      </tr>
                                      <!--end::Table row-->
                                  </thead>
                                  <tbody class="fw-semibold text-dark fs-6">
                                      <tr class="cursor-pointer" id="kt_trx_110828597083963438_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-minus"></i>
                                  </div>
              </div>
          </td>
          <td>£202.00 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110828597083963438</td>
          <td>Fri, Aug 4, 2023 12:49 AM</td>
      </tr>
      <tr class="cursor-pointer" id="kt_trx_110823524922753071_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-minus"></i>
                                  </div>
              </div>
          </td>
          <td>£6,000.00 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110823524922753071</td>
          <td>Thu, Aug 3, 2023 3:20 AM</td>
      </tr>
      <tr class="cursor-pointer" id="kt_trx_110803607919329327_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-minus"></i>
                                  </div>
              </div>
          </td>
          <td>£101.00 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110803607919329327</td>
          <td>Sun, Jul 30, 2023 2:54 PM</td>
      </tr>
      <tr class="cursor-pointer" id="kt_trx_110803600850944046_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-minus"></i>
                                  </div>
              </div>
          </td>
          <td>£1,000.00 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110803600850944046</td>
          <td>Sun, Jul 30, 2023 2:53 PM</td>
      </tr>
      <tr class="cursor-pointer" id="kt_trx_110759104006455335_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-minus"></i>
                                  </div>
              </div>
          </td>
          <td>£224.22 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110759104006455335</td>
          <td>Sat, Jul 22, 2023 6:16 PM</td>
      </tr>
      <tr class="cursor-pointer" id="kt_trx_110730646387818532_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-minus"></i>
                                  </div>
              </div>
          </td>
          <td>£6.01 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110730646387818532</td>
          <td>Mon, Jul 17, 2023 5:39 PM</td>
      </tr>
      <tr class="cursor-pointer" id="kt_trx_110724362831200289_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-plus"></i>
                                  </div>
              </div>
          </td>
          <td>£122.00 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110724362831200289</td>
          <td>Sun, Jul 16, 2023 3:01 PM</td>
      </tr>
      <tr class="cursor-pointer" id="kt_trx_110723966013276193_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-minus"></i>
                                  </div>
              </div>
          </td>
          <td>£909.00 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110723966013276193</td>
          <td>Sun, Jul 16, 2023 1:20 PM</td>
      </tr>
      <tr class="cursor-pointer" id="kt_trx_110722141131243555_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-minus"></i>
                                  </div>
              </div>
          </td>
          <td>£255.53 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110722141131243555</td>
          <td>Sun, Jul 16, 2023 5:36 AM</td>
      </tr>
      <tr class="cursor-pointer" id="kt_trx_110713000353267745_button">
          <td>
              <div class="symbol symbol-40px symbol-circle me-5">
                  <div class="symbol-label fs-3 fw-bolder text-dark">
                                      <i class="fal fa-minus"></i>
                                  </div>
              </div>
          </td>
          <td>£1,000.00 GBP</td>
              <td><span class="badge badge-pill badge-secondary badge-sm">Completed</span></td>
              <td>110713000353267745</td>
          <td>Fri, Jul 14, 2023 2:52 PM</td>
      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                          </div>
          </div>
          <div wire:ignore.self id="kt_trx_110828597083963438" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110828597083963438_button" data-kt-drawer-close="#kt_trx_110828597083963438_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110828597083963438_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-minus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£202.00 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110828597083963438 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110828597083963438" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £2.00 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Fri, Aug 4, 2023 12:49 AM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>**** 8853 [John Doe]</span>
      </li>
                                                  </div>
              </div>
          </div>
      </div>
      <div wire:ignore.self id="kt_trx_110823524922753071" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110823524922753071_button" data-kt-drawer-close="#kt_trx_110823524922753071_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110823524922753071_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-minus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£6,000.00 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110823524922753071 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110823524922753071" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £36.00 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Thu, Aug 3, 2023 3:20 AM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Beneficiary Name: J D Lange</span>
      </li>
      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Beneficiary Account: 75945612</span>
      </li>
      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Beneficiary Bank Code: 145614</span>
      </li>
      <a href="https://nothingdevelopers.xyz/konan/user/transfer/method/faster/110823524922753071" class="btn btn-light-primary btn-block mt-5"><i class="fal fa-sync"></i> Repeat Transaction</a>
      <a href="https://nothingdevelopers.xyz/konan/user/generate-receipt/110823524922753071" class="btn btn-primary btn-block mt-5" target="_blank"><i class="fal fa-receipt"></i> Receipt</a>
                                                  </div>
              </div>
          </div>
      </div>
      <div wire:ignore.self id="kt_trx_110803607919329327" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110803607919329327_button" data-kt-drawer-close="#kt_trx_110803607919329327_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110803607919329327_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-minus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£101.00 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110803607919329327 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110803607919329327" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £1.00 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Sun, Jul 30, 2023 2:54 PM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>**** 6817 [John Doe]</span>
      </li>
                                                  </div>
              </div>
          </div>
      </div>
      <div wire:ignore.self id="kt_trx_110803600850944046" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110803600850944046_button" data-kt-drawer-close="#kt_trx_110803600850944046_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110803600850944046_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-minus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£1,000.00 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110803600850944046 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110803600850944046" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £6.00 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Sun, Jul 30, 2023 2:53 PM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Beneficiary Name: Ssemwogerere joel</span>
      </li>
      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Beneficiary Account: 75945612</span>
      </li>
      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Beneficiary Bank Code: 145614</span>
      </li>
      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>hey</span>
      </li>
      <a href="https://nothingdevelopers.xyz/konan/user/transfer/method/faster/110803600850944046" class="btn btn-light-primary btn-block mt-5"><i class="fal fa-sync"></i> Repeat Transaction</a>
      <a href="https://nothingdevelopers.xyz/konan/user/generate-receipt/110803600850944046" class="btn btn-primary btn-block mt-5" target="_blank"><i class="fal fa-receipt"></i> Receipt</a>
                                                  </div>
              </div>
          </div>
      </div>
      <div wire:ignore.self id="kt_trx_110759104006455335" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110759104006455335_button" data-kt-drawer-close="#kt_trx_110759104006455335_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110759104006455335_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-minus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£224.22 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110759104006455335 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110759104006455335" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £2.22 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Sat, Jul 22, 2023 6:16 PM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>**** 1925 [John Doe]</span>
      </li>
                                                  </div>
              </div>
          </div>
      </div>
      <div wire:ignore.self id="kt_trx_110730646387818532" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110730646387818532_button" data-kt-drawer-close="#kt_trx_110730646387818532_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110730646387818532_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-minus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£6.01 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110730646387818532 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110730646387818532" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £1.01 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Mon, Jul 17, 2023 5:39 PM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Recipient: Onalugho Lamosi</span>
      </li>
      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Konan Tag: lamosi <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="lamosi" title="Copy"></i></span>
      </li>
      <a href="https://nothingdevelopers.xyz/konan/user/transfer/method/tag/110730646387818532" class="btn btn-light-primary btn-block mt-5"><i class="fal fa-sync"></i> Repeat Transaction</a>
      <a href="https://nothingdevelopers.xyz/konan/user/generate-receipt/110730646387818532" class="btn btn-primary btn-block mt-5" target="_blank"><i class="fal fa-receipt"></i> Receipt</a>
                                                  </div>
              </div>
          </div>
      </div>
      <div wire:ignore.self id="kt_trx_110724362831200289" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110724362831200289_button" data-kt-drawer-close="#kt_trx_110724362831200289_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110724362831200289_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-plus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£122.00 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110724362831200289 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110724362831200289" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £0.00 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Sun, Jul 16, 2023 3:01 PM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>**** 2167 [John Doe]</span>
      </li>
                                                  </div>
              </div>
          </div>
      </div>
      <div wire:ignore.self id="kt_trx_110723966013276193" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110723966013276193_button" data-kt-drawer-close="#kt_trx_110723966013276193_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110723966013276193_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-minus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£909.00 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110723966013276193 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110723966013276193" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £9.00 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Sun, Jul 16, 2023 1:20 PM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>**** 2167 [John Doe]</span>
      </li>
                                                  </div>
              </div>
          </div>
      </div>
      <div wire:ignore.self id="kt_trx_110722141131243555" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110722141131243555_button" data-kt-drawer-close="#kt_trx_110722141131243555_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110722141131243555_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-minus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£255.53 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110722141131243555 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110722141131243555" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £2.53 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Sun, Jul 16, 2023 5:36 AM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>**** 8249 [John Doe]</span>
      </li>
                                                  </div>
              </div>
          </div>
      </div>
      <div wire:ignore.self id="kt_trx_110713000353267745" class="bg-white" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_trx_110713000353267745_button" data-kt-drawer-close="#kt_trx_110713000353267745_close">
          <div class="card w-100">
              <div class="card-header pe-5 border-0">
                  <div class="card-title">
                      <div class="d-flex justify-content-center flex-column me-3">
                          <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Transaction Details</div>
                      </div>
                  </div>
                  <div class="card-toolbar">
                      <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_trx_110713000353267745_close">
                          <span class="svg-icon svg-icon-2">
                              <i class="fal fa-times"></i>
                          </span>
                      </div>
                  </div>
              </div>
              <div class="card-body text-wrap">
                  <div class="btn-wrapper text-center mb-3">
                      <div class="symbol symbol-100px symbol-circle me-5 mb-10">
                          <div class="symbol-label fs-1 text-dark">
                                                      <i class="fal fa-minus fa-2x"></i>
                                                  </div>
                      </div>
                      <p class="text-dark fs-1 fw-bolder">£1,000.00 GBP</p>
                  </div>
                  <div class="d-flex flex-column">
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Reference: 110713000353267745 <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="110713000353267745" title="Copy"></i></span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Charge: £6.00 GBP</span>
                      </li>
                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Date: Fri, Jul 14, 2023 2:52 PM</span>
                      </li>
                                      <li class="d-flex align-items-center py-2">
                          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Status: <span class="badge badge-pill badge-secondary badge-sm">Completed</span></span>
                      </li>
                                                                      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Beneficiary Name: James John Eddie</span>
      </li>
      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Beneficiary Account: 75945612</span>
      </li>
      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Beneficiary Bank Code: 145614</span>
      </li>
      <li class="d-flex align-items-center py-2">
          <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>business</span>
      </li>
      <a href="https://nothingdevelopers.xyz/konan/user/transfer/method/faster/110713000353267745" class="btn btn-light-primary btn-block mt-5"><i class="fal fa-sync"></i> Repeat Transaction</a>
      <a href="https://nothingdevelopers.xyz/konan/user/generate-receipt/110713000353267745" class="btn btn-primary btn-block mt-5" target="_blank"><i class="fal fa-receipt"></i> Receipt</a>
                                                  </div>
              </div>
          </div>
      </div>
      </div>
      <!-- Livewire Component wire-end:ribhbs9vxn5hcDoLugVG -->    </div>
        </div>
      </div>
          </div>
          <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div class="container-fluid d-flex flex-column flex-md-row flex-stack">
              <!--begin::Copyright-->
              <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-bold me-2">2023 ©</span>
                <a href="https://boomchart.io" target="_blank" class="text-gray-800 text-hover-primary">Boomchart</a>
              </div>
              <!--end::Copyright-->
              <!--begin::Menu-->
              <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                <li class="menu-item">
                  <a href="https://nothingdevelopers.xyz/konan/about" target="_blank" class="menu-link px-2 text-dark">About</a>
                </li>
                <li class="menu-item">
                  <a href="https://nothingdevelopers.xyz/konan/terms" target="_blank" class="menu-link px-2 text-dark">Terms &amp; Conditions</a>
                </li>
                <li class="menu-item">
                  <a href="https://nothingdevelopers.xyz/konan/privacy" target="_blank" class="menu-link px-2 text-dark">Privacy</a>
                </li>
              </ul>
              <!--end::Menu-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Footer-->
        </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
    <script>
        $('#transferform').on('submit', function() {
            (async () => {

                const {
                    value: password
                } = await Swal.fire({
                    title: 'Input your password',
                    input: 'password',
                    inputLabel: 'Enter your account password to complete transfer',
                    inputPlaceholder: 'Enter your account password'
                })

                if (password) {

                    document.getElementById('acntpass').value = password;
                    $("#subbtn").attr("disabled", "disabled").val('Please wait....');
                    $.ajax({
                        url: "<?php echo e(route('transfertouser')); ?>",
                        type: 'POST',
                        data: $('#transferform').serialize(),
                        success: function(response) {
                            if (response.status === 200) {
                                Swal.fire({
                                    title: 'Success!',
                                    text: response.message,
                                    icon: 'success',
                                    confirmButtonText: 'Cool'
                                });
                                $("#subbtn").removeAttr("disabled").val('Proceed');
                                setTimeout(() => {
                                    let url = "<?php echo e(url('/dashboard/transfer-funds')); ?>";
                                    window.location.href = url;
                                }, 3000);
                            } else {
                                $("#subbtn").removeAttr("disabled").val('Proceed');
                                Swal.fire({
                                    title: 'Error!',
                                    text: response.message,
                                    icon: 'error',
                                });
                            }
                        },
                        error: function(error) {
                            console.log(error);
                        },

                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: 'Password is required',
                        icon: 'error',
                        confirmButtonText: 'Alright'
                    })
                }

            })()

        });
    </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bank\resources\views/user/transfer.blade.php ENDPATH**/ ?>