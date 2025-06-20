
<div id="search-modal" class="hs-overlay ti-modal hidden mt-[1.75rem]">
                <div class="ti-modal-box">
                    <div class="ti-modal-content !border !border-defaultborder !rounded-[0.5rem]">
                    <div class="ti-modal-body">

                        <div class="input-group border-[2px] border-primary rounded-[0.25rem] w-full flex">
                        <a aria-label="anchor" href="javascript:void(0);"
                            class="input-group-text flex items-center bg-light border-e-[#dee2e6] !py-[0.375rem] !px-[0.75rem] !rounded-none !text-[0.875rem]"
                            id="Search-Grid"><i class="fe fe-search header-link-icon text-[0.875rem]"></i></a>

                        <input type="search" class="form-control border-0 px-2 !text-[0.8rem] w-full focus:ring-transparent"
                            placeholder="Search" aria-label="Username">

                        <a aria-label="anchor" href="javascript:void(0);" class="flex items-center input-group-text bg-light !py-[0.375rem] !px-[0.75rem]"
                            id="voice-search"><i class="fe fe-mic header-link-icon"></i></a>
                        <div class="hs-dropdown ti-dropdown">
                            <a aria-label="anchor" href="javascript:void(0);"
                            class="flex items-center hs-dropdown-toggle ti-dropdown-toggle btn btn-light btn-icon !bg-light !py-[0.375rem] !rounded-none !px-[0.75rem] text-[0.95rem] h-[2.413rem] w-[2.313rem]">
                            <i class="fe fe-more-vertical"></i>
                            </a>

                            <ul class="absolute hs-dropdown-menu ti-dropdown-menu !-mt-2 !p-0 hidden">
                            <li><a
                                class="ti-dropdown-item flex text-defaulttextcolor !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                href="javascript:void(0);">Action</a></li>
                            <li><a
                                class="ti-dropdown-item flex text-defaulttextcolor !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                href="javascript:void(0);">Another action</a></li>
                            <li><a
                                class="ti-dropdown-item flex text-defaulttextcolor !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                href="javascript:void(0);">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a
                                class="ti-dropdown-item flex text-defaulttextcolor !py-[0.5rem] !px-[0.9375rem] !text-[0.8125rem] font-medium"
                                href="javascript:void(0);">Separated link</a></li>
                            </ul>
                        </div>
                        </div>
                        <div class="mt-5">
                        <p class="font-normal  text-[#8c9097] text-[0.813rem] mb-2">Are You Looking For...</p>

                        <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem]"><i class="fe fe-user me-2"></i>People<a
                            href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i class="fe fe-x"></i></a></span>
                        <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem]"><i class="fe fe-file-text me-2"></i>Pages<a
                            href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i class="fe fe-x"></i></a></span>
                        <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem]"><i
                            class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i
                                class="fe fe-x"></i></a></span>
                        <span class="search-tags text-[0.75rem] !py-[0rem] !px-[0.55rem]"><i class="fe fe-server me-2"></i>Tags<a
                            href="javascript:void(0)" class="tag-addon header-remove-btn"><span class="sr-only">Remove badge</span><i class="fe fe-x"></i></a></span>

                        </div>


                        <div class="my-[1.5rem]">
                        <p class="font-normal  text-[#8c9097] text-[0.813rem] mb-2">Recent Search :</p>

                        <div id="dismiss-notifications-alert" role="alert"
                            class="!p-2 border rounded-[0.3125rem] flex items-center text-defaulttextcolor !mb-2 !text-[0.8125rem] alert">
                            <a href="{{url('notifications')}}"><span>Notifications</span></a>
                            <a aria-label="anchor" class="ms-auto leading-none" href="javascript:void(0);" data-hs-remove-element="#dismiss-notifications-alert"><i
                                class="fe fe-x !text-[0.8125rem] text-[#8c9097]"></i></a>
                        </div>

                        <div id="dismiss-alerts-alert" role="alert"
                            class="!p-2 border rounded-[0.3125rem] flex items-center text-defaulttextcolor !mb-2 !text-[0.8125rem] alert">
                            <a href="{{url('alerts')}}"><span>Alerts</span></a>
                            <a aria-label="anchor" class="ms-auto leading-none" href="javascript:void(0);" data-hs-remove-element="#dismiss-alerts-alert"><i
                                class="fe fe-x !text-[0.8125rem] text-[#8c9097]"></i></a>
                        </div>

                        <div id="dismiss-mail-alert" role="alert"
                            class="!p-2 border rounded-[0.3125rem] flex items-center text-defaulttextcolor !mb-0 !text-[0.8125rem] alert">
                            <a href="{{url('mail')}}"><span>Mail</span></a>
                            <a aria-label="anchor" class="ms-auto lh-1" href="javascript:void(0);" data-hs-remove-element="#dismiss-mail-alert"><i
                                class="fe fe-x !text-[0.8125rem] text-[#8c9097]"></i></a>
                        </div>
                        </div>
                    </div>

                    <div class="ti-modal-footer !py-[1rem] !px-[1.25rem]">
                        <div class="inline-flex rounded-md  shadow-sm">
                        <button type="button"
                            class="ti-btn-group !px-[0.75rem] !py-[0.45rem]  rounded-s-[0.25rem] !rounded-e-none ti-btn-primary !text-[0.75rem]">
                            Search
                        </button>
                        <button type="button"
                            class="ti-btn-group  ti-btn-primary-full rounded-e-[0.25rem] !text-[0.75rem] !rounded-s-none !px-[0.75rem] !py-[0.45rem]">
                            Clear Recents
                        </button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>