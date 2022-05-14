@extends('backend.layouts.app')

@section('title', __('Privacy Policy'))

@section('content')

<section class="section">
    <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
            <h4 class="page-title m-b-0">Editor</h4>
        </li>

        <li class="breadcrumb-item">Forms</li>
        <li class="breadcrumb-item">Form Editor</li>
    </ul>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Simple Summernote</h4>
                    </div>
                    <div class="card-body">


                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                            <div class="col-sm-12 col-md-7">
                                <textarea class="summernote-simple" style="display: none;"></textarea>
                                <div class="note-editor note-frame card">
                                    <div class="note-dropzone">
                                        <div class="note-dropzone-message"></div>
                                    </div>
                                    <div class="note-toolbar-wrapper" style="height: 36px;">
                                        <div class="note-toolbar card-header"
                                            style="position: relative; top: 0px; width: 100%;">
                                            <div class="note-btn-group btn-group note-style"><button type="button"
                                                    class="note-btn btn btn-light btn-sm note-btn-bold" tabindex="-1"
                                                    title="" data-bs-original-title="Bold (CTRL+B)"
                                                    aria-label="Bold (CTRL+B)"><i
                                                        class="note-icon-bold"></i></button><button type="button"
                                                    class="note-btn btn btn-light btn-sm note-btn-italic" tabindex="-1"
                                                    title="" data-bs-original-title="Italic (CTRL+I)"
                                                    aria-label="Italic (CTRL+I)"><i
                                                        class="note-icon-italic"></i></button><button type="button"
                                                    class="note-btn btn btn-light btn-sm note-btn-underline"
                                                    tabindex="-1" title="" data-bs-original-title="Underline (CTRL+U)"
                                                    aria-label="Underline (CTRL+U)"><i
                                                        class="note-icon-underline"></i></button><button type="button"
                                                    class="note-btn btn btn-light btn-sm" tabindex="-1" title=""
                                                    data-bs-original-title="Remove Font Style (CTRL+\)"
                                                    aria-label="Remove Font Style (CTRL+\)"><i
                                                        class="note-icon-eraser"></i></button></div>
                                            <div class="note-btn-group btn-group note-font"><button type="button"
                                                    class="note-btn btn btn-light btn-sm note-btn-strikethrough"
                                                    tabindex="-1" title=""
                                                    data-bs-original-title="Strikethrough (CTRL+SHIFT+S)"
                                                    aria-label="Strikethrough (CTRL+SHIFT+S)"><i
                                                        class="note-icon-strikethrough"></i></button></div>
                                            <div class="note-btn-group btn-group note-para">
                                                <div class="note-btn-group btn-group"><button type="button"
                                                        class="note-btn btn btn-light btn-sm dropdown-toggle"
                                                        tabindex="-1" data-toggle="dropdown" title=""
                                                        data-bs-original-title="Paragraph" aria-label="Paragraph"><i
                                                            class="note-icon-align-left"></i></button>
                                                    <div class="dropdown-menu">
                                                        <div class="note-btn-group btn-group note-align"><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title=""
                                                                data-bs-original-title="Align left (CTRL+SHIFT+L)"
                                                                aria-label="Align left (CTRL+SHIFT+L)"><i
                                                                    class="note-icon-align-left"></i></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title=""
                                                                data-bs-original-title="Align center (CTRL+SHIFT+E)"
                                                                aria-label="Align center (CTRL+SHIFT+E)"><i
                                                                    class="note-icon-align-center"></i></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title=""
                                                                data-bs-original-title="Align right (CTRL+SHIFT+R)"
                                                                aria-label="Align right (CTRL+SHIFT+R)"><i
                                                                    class="note-icon-align-right"></i></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title=""
                                                                data-bs-original-title="Justify full (CTRL+SHIFT+J)"
                                                                aria-label="Justify full (CTRL+SHIFT+J)"><i
                                                                    class="note-icon-align-justify"></i></button></div>
                                                        <div class="note-btn-group btn-group note-list"><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title=""
                                                                data-bs-original-title="Outdent (CTRL+[)"
                                                                aria-label="Outdent (CTRL+[)"><i
                                                                    class="note-icon-align-outdent"></i></button><button
                                                                type="button" class="note-btn btn btn-light btn-sm"
                                                                tabindex="-1" title=""
                                                                data-bs-original-title="Indent (CTRL+])"
                                                                aria-label="Indent (CTRL+])"><i
                                                                    class="note-icon-align-indent"></i></button></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="note-editing-area">
                                        <div class="note-handle">
                                            <div class="note-control-selection" style="display: none;">
                                                <div class="note-control-selection-bg"></div>
                                                <div class="note-control-holder note-control-nw"></div>
                                                <div class="note-control-holder note-control-ne"></div>
                                                <div class="note-control-holder note-control-sw"></div>
                                                <div class="note-control-sizing note-control-se"></div>
                                                <div class="note-control-selection-info"></div>
                                            </div>
                                        </div>
                                        <textarea class="note-codable"></textarea>
                                        <div class="note-editable card-block" contenteditable="true"
                                            style="min-height: 150px;">
                                            <p><br></p>
                                        </div>
                                    </div>
                                    <div class="note-statusbar">
                                        <div class="note-resizebar">
                                            <div class="note-icon-bar"></div>
                                            <div class="note-icon-bar"></div>
                                            <div class="note-icon-bar"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Publish</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection
